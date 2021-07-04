<?php


namespace App\Services;

use Codenixsv\BittrexApi\BittrexClient;


class Bittrex implements ExchangeInterface
{
    protected $api;

    public function __construct($account)
    {
        $api_key = $account->credentials['apiKey'] ?? '';
        $api_secret = $account->credentials['apiSecret'] ?? '';

        $this->api = new BittrexClient();
        $this->api->setCredential($api_key, $api_secret);
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
                        'symbol' => str_replace('-','',$item['MarketName']),
                        'baseAsset' => $item['BaseCurrency'],
                        'quoteAsset' => $item['MarketCurrency'],
                        'baseName' => $item['BaseCurrencyLong'],
                        'quoteName' => $item['MarketCurrencyLong'],
                        'orderTypes'=>[]
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
