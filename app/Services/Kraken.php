<?php


namespace App\Services;

use App\Models\Exchange;
use App\Models\UserExchange;
use Butschster\Kraken\Client;


class Kraken implements ExchangeInterface
{
    protected $api;
    protected $use_testnet = true;
    protected $id = 'kraken';
    protected $account_id = null;

    public function __construct( $account)
    {
        $client=new\GuzzleHttp\Client();
        $this->api = new Client($client, $account->credentials['apiKey'] ?? '', $account->credentials['apiSecret'] ?? '');
    }

    /**
     * @inheritDoc
     * @throws \Butschster\Kraken\Exceptions\KrakenApiErrorException
     */
    public function account()
    {
        $account = [];
        try {
            $balance = $this->api->request('Balance', [], false);
            $account['balances'] = array_map(function ($item, $key) {
                return [
                    'asset' => $key,
                    'free' => $item,
                    'locked' => $item,
                ];

            }, $balance, array_keys($balance));
        } catch (\Exception $e) {
            $account['balances'] = [];
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
            $assets = $this->api->request('AssetPairs');
            if ($assets) {
                $data['symbols'] = array_map(function ($item) {
                    return [
                        'symbol' => $item['altname'],
                        'baseAsset' => $item['base'],
                        'quoteAsset' => $item['quote'],
                        'baseName' => $item['base'],
                        'quoteName' => $item['quote'],
                        'orderTypes' => []
                    ];
                }, $assets);
            }
        } catch (\Exception $e) {

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
