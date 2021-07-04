<?php


namespace App\Services;

use Hitbtc\ProtectedClient;
use Hitbtc\PublicClient;
use Illuminate\Support\Facades\Http;

class Hitbtc implements ExchangeInterface
{
    protected $api;
    protected $public_client;
    protected $use_testnet = false;
    public $public_api_url = 'https://api.hitbtc.com/api/2/public';

    public function __construct($account)
    {
        $api_key = $account->credentials['apiKey'] ?? '';
        $api_secret = $account->credentials['apiSecret'] ?? '';
        $this->api = new ProtectedClient($api_key, $api_secret, $this->use_testnet ? 'https://api.demo.hitbtc.com/api/2' : false);
        $this->public_client = new PublicClient($this->use_testnet ? 'https://api.demo.hitbtc.com/api/2' : false);
    }

    /**
     * @inheritDoc
     */
    public function account()
    {
        $balance = $this->api->getBalanceTrading();
        $account['balances'] = $account['balances'] = collect(array_map(function ($item) {
            return [
                'asset' => $item->getCurrency(),
                'free' => $item->getAvailable(),
                'locked' => $item->getReserved(),
            ];

        }, $balance))->toArray();

        return response()->json($account);
    }

    /**
     * @inheritDoc
     */
    public function exchangeInfo()
    {
        $data = [];
        try {
            $markets = Http::get($this->public_api_url . '/symbol')->json();
            if (!empty($markets) && is_array($markets)) {
                $data['status'] = 1;
                $data['symbols'] = array_map(function ($item) {
                    return [
                        'symbol' => $item['id'],
                        'baseAsset' => $item['baseCurrency'],
                        'quoteAsset' => $item['quoteCurrency'],
                        'baseName' => $item['baseCurrency'],
                        'quoteName' => $item['quoteCurrency'],
                        'orderTypes'=>[]
                    ];
                }, $markets);
            } else {
                $data = [
                    'status' => 0,
                    'symbols' => [],
                    'message' => __('The list of currency symbols is empty')
                ];
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

    public function createOrder(array $data)
    {
        // TODO: Implement createOrder() method.
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
