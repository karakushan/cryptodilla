<?php


namespace App\Services;

use Hitbtc\ProtectedClient;

class Hitbtc implements ExchangeInterface
{
    protected $api;
    protected $use_testnet = false;

    public function __construct($account)
    {
        $api_key = $account->credentials['apiKey'];
        $api_secret = $account->credentials['apiSecret'];
        $this->api = new ProtectedClient($api_key, $api_secret, $this->use_testnet ? 'https://api.demo.hitbtc.com/api/2' : false);
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
        // TODO: Implement exchangeInfo() method.
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
