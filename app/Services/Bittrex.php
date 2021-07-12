<?php


namespace App\Services;

use Codenixsv\BittrexApi\BittrexClient;
use Illuminate\Support\Facades\Http;


class Bittrex implements ExchangeInterface
{
    protected $api;
    protected $api_key;
    protected $api_secret;
    const BASE_URL = 'https://api.bittrex.com/v3';

    public function __construct($account)
    {
        $this->api_key = $account->credentials['apiKey'] ?? '';
        $this->api_secret = $account->credentials['apiSecret'] ?? '';

        $this->api = new BittrexClient();
        $this->api->setCredential($this->api_key, $this->api_secret);
    }

    /**
     * @inheritDoc
     */
    public function account()
    {
        $account = [];
        try {
            $balance = $this->api->account()->getBalances();
            $account['status'] = 1;
            if (is_array($balance) && isset($balance['result']) && is_array($balance['result'])) {
                $account['balances'] = array_map(function ($item) {
                    return [
                        'asset' => $item['Currency'],
                        'free' => $item['Available'],
                        'locked' => $item['Pending'],
                    ];

                }, $balance['result']);
            }
        } catch (\Exception $e) {
            $account = [
                'status' => 0,
                'balances' => [],
                'message' => $e->getMessage()
            ];
        }

        return response()->json($account);
    }

    /**
     * @inheritDoc
     */
    public function exchangeInfo()
    {
        $data = [];
        try {
            $data['status'] = 1;
            $markets = $this->api->public()->getMarkets();
            if (isset($markets['result'])) {
                $data['symbols'] = array_map(function ($item) {
                    return [
                        'symbol' => str_replace('-', '', $item['MarketName']),
                        'baseAsset' => $item['BaseCurrency'],
                        'quoteAsset' => $item['MarketCurrency'],
                        'baseName' => $item['BaseCurrencyLong'],
                        'quoteName' => $item['MarketCurrencyLong'],
                        'orderTypes' => [
                            'LIMIT', 'MARKET', 'CEILING_LIMIT', 'CEILING_MARKET'
                        ]
                    ];
                }, $markets['result']);
            }

        } catch (\Exception $e) {
            $data = [
                'status' => 0,
                'symbols' => [],
                'message' => $e->getMessage()
            ];
        }

        return response()->json($data);
    }


    protected function requestTimestamp()
    {
        list($usec, $sec) = explode(' ', microtime());
        return (int)((int)$sec * 1000 + ((float)$usec * 1000));
    }

    /**
     * Отправляет запрос на получение выполнгение секретных данных
     *
     * @param string $url
     * @param array $request_data
     * @param string $method
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    protected function send(string $url, array $request_data = [], $method = 'POST')
    {
        $timestamp = $timestamp = time() * 1000;

        $contentHash = hash('sha512', !empty($request_data) ? json_encode($request_data) : '');
        $url = self::BASE_URL . $url;
        $preSignature = ($timestamp . $url . $method . $contentHash);
        $signature = hash_hmac('sha512', $preSignature, $this->api_secret);
        $headers = array(
            'Api-Key' => $this->api_key,
            'Api-Timestamp' => $timestamp,
            'Api-Content-Hash' => $contentHash,
            'Api-Signature' => $signature,
            'Content-Type' => "application/json"
        );

        $request = Http::withHeaders($headers);

        switch ($method) {

            case 'GET':
                $response = $request->get($url, $request_data);
                break;
            case 'POST':
                $response = $request->post($url, $request_data);
                break;
            case 'DELETE':
                $response = $request->delete($url, $request_data);
                break;
            case 'PUT':
                $response = $request->put($url, $request_data);
                break;

            default :
                $response = null;
                break;

        }
        return $response;
    }

    /**
     * Создает заказ
     *
     * @param array $data
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function createOrder(array $data)
    {

        $request_data = [
            "marketSymbol" => $data['baseAsset'] . '-' . $data['quoteAsset'],
            "direction" => $data['side'],
            "type" => $data['type'],
            "quantity" => (float)$data['quantity'],
            'timeInForce' => $data['type'] == 'MARKET' ? 'FILL_OR_KILL' : 'GOOD_TIL_CANCELLED'
        ];
        if ($data['type'] != 'MARKET') {
            $request_data["limit"] = (float)$data['price'];
        }

        $response = $this->send('/orders', $request_data);

        $status_code = $response->status();
        $response_body = $response->json();

        if ($response->successful()) {
            $message = __('Order successfully opened!');
            $order = $response_body;
            $status_code = 200;
        } else {
            if (isset($response_body['data'])) {
                $response_body['data'] = array_map(function ($item) {
                    return $item[0];
                }, $response_body['data']);
            }

            if (isset($response_body['data']) && count($response_body['data'])) {
                $message = implode(' ', $response_body['data']);
            } else {
                $message = $response_body["code"];
            }

            $order = null;
        }

        return response(compact('message', 'order'), $status_code);
    }

    public function cancelOrder($order_id)
    {
        $response = $this->send('/orders/' . $order_id, [], 'DELETE');

        $response->throw();

        return $response->json();
    }

    public function cancelAllOrders()
    {
        // TODO: Implement cancelAllOrders() method.
    }

    /**
     * @inheritDoc
     */
    public function getAllOrders(string $symbol)
    {
        $orders_open = (array)$this->send('/orders/closed', [], 'GET')->json();
        $orders_closed = (array)$this->send('/orders/open', [], 'GET')->json();
        $orders = array_merge($orders_open, $orders_closed);

        if (!empty($orders) && is_array($orders)) {
            $orders = array_map(function ($item) {
                $item['symbol'] = $item['marketSymbol'];
                $item['side'] = $item['direction'];
                $item['executedQty'] = $item['quantity'];
                $item['time'] = $item['createdAt'];
                $item['price'] = $item['limit'];
                return $item;
            }, $orders);
        }

        return $orders;
    }
}
