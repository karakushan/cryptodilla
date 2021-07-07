<?php


namespace App\Services;

use Codenixsv\BittrexApi\BittrexClient;
use Illuminate\Support\Facades\Http;


class Bittrex implements ExchangeInterface
{
    protected $api;
    protected $api_key;
    protected $api_secret;

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

    public function createOrder(array $data)
    {
        $timestamp = $timestamp = time() * 1000;
        $request_data = [
            "marketSymbol" => $data['quoteAsset'] . '-' . $data['baseAsset'],
            "direction" => $data['side'],
            "type" => $data['type'],
            "quantity" => (float)$data['quantity'],
            'timeInForce' => $data['type'] == 'MARKET' ? 'FILL_OR_KILL' : 'GOOD_TIL_CANCELLED'
        ];
        if ($data['type'] != 'MARKET') {
            $request_data["limit"] = (float)$data['price'];
        }

        $contentHash = hash('sha512', json_encode($request_data));
        $url = 'https://api.bittrex.com/v3/orders';
        $method = 'POST';
        $preSignature = ($timestamp . $url . $method . $contentHash);
        $signature = hash_hmac('sha512', $preSignature, $this->api_secret);
        $headers = array(
            'Api-Key' => $this->api_key,
            'Api-Timestamp' => $timestamp,
            'Api-Content-Hash' => $contentHash,
            'Api-Signature' => $signature,
            'Content-Type' => "application/json"
        );
        $response = Http::withHeaders($headers)->post($url, $request_data);
        $status_code = $response->status();
        $response_body = $response->json();

        if ($status_code != 200) {
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
        // TODO: Implement cancelOrder() method.
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
        // TODO: Implement getAllOrders() method.
    }
}
