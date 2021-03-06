<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;
use hitbtc\api\HitBTC as Hb;
use Exception;
use App\Models\Currency;

class Hitbtc implements ExchangeInterface
{
    protected $api;
    protected $public_client;
    protected $use_testnet = false;
    protected $base_url_public;
    protected $protected_api_url;
    protected $api_key;
    protected $api_secret;

    public function __construct($account)
    {
        $this->api_key = $account->credentials['apiKey'] ?? '';
        $this->api_secret = $account->credentials['apiSecret'] ?? '';
        $this->use_testnet = $account->is_demo ?? false;

        $this->api = new Hb($this->api_key, $this->api_secret, 2, $this->use_testnet);
        $this->base_url_public = $this->use_testnet ?
            'https://api.demo.hitbtc.com/api/2/public'
            : 'https://api.hitbtc.com/api/2/public';
        $this->protected_api_url = $this->use_testnet ?
            'https://api.demo.hitbtc.com/api/2'
            : 'https://api.hitbtc.com/api/2';
    }

    /**
     * @inheritDoc
     */
    public function account()
    {
        try {
            $balance = $this->api->getBalances();
            $account['balances'] = collect(array_map(function ($item) {
                return [
                    'asset' => $item['currency'],
                    'free' => $item['available'],
                    'locked' => $item['reserved'],
                ];

            }, $balance))->toArray();

        } catch (\Exception $e) {
            $account = $e->getMessage();
        }

        return response()->json(compact('account'));
    }

    /**
     * @inheritDoc
     */
    public function exchangeInfo()
    {
        $data = [];
        try {
            $markets = Http::get($this->base_url_public . '/symbol')->json();
            if (!empty($markets) && is_array($markets)) {
                $data['status'] = 1;
                $data['symbols'] = array_map(function ($item) {
                    $item = [
                        'symbol' => $item['id'],
                        'baseAsset' => $item['baseCurrency'],
                        'quoteAsset' => $item['quoteCurrency'],
                        'baseName' => $item['baseCurrency'],
                        'quoteName' => $item['quoteCurrency'],
                        'orderTypes' => [
                            'limit', 'market', 'stopLimit', 'stopMarket'
                        ]
                    ];
                    $currency = Currency::where('slug', mb_strtolower($item['baseAsset']))->first();
                    if ($currency && isset($currency->logo_url)) {
                        $item['logo_url'] = $currency->logo_url;
                    }
                    return $item;
                }, $markets);
            } else {
                $data = [
                    'status' => 0,
                    'symbols' => [],
                    'message' => __('The list of currency symbols is empty')
                ];
            }

        } catch (Exception $e) {
            $data = [
                'status' => 0,
                'symbols' => [],
                'message' => $e->getMessage()
            ];
        }

        return response()->json($data);
    }

    public function createOrder(array $data)
    {
        $order = $this->api->addOrder($data['symbol'], $data['quantity'], $data['price'], [
            'type' => $data['type'],
            'side' => mb_strtolower($data['side']),
            'stopPrice' => isset($data['stopPrice']) && (float)$data['stopPrice'] > 0 ? (float)$data['stopPrice'] : ''
        ]);

        return $order;
    }

    public function cancelOrder($order_id, $symbol = '')
    {

        try {
            $client = new \Hitbtc\ProtectedClient($this->api_key, $this->api_secret, $this->use_testnet);
            $order = $client->getHttpClient()->delete('/api/2/order/' + $order_id);
            $message = __('Order canceled successfully');
        } catch (Exception $e) {

            $message = $e->getMessage();
        }

        return response()->json(compact('order', 'message'));
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
        $result = Http::withBasicAuth($this->api_key, $this->api_secret)
            ->get($this->protected_api_url . '/history/order')->json();

        return array_map(function ($item) {
            $item['executedQty'] = $item['quantity'] ?? 0;
            $item['time'] = $item['createdAt'];
            return $item;
        }, $result);
    }
}
