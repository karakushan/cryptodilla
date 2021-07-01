<?php


namespace App\Services;

use App\Models\Exchange;
use App\Models\UserExchange;
use poloniex\api\Poloniex as Client;


class Poloniex implements ExchangeInterface
{
    protected $api;
    protected $use_testnet = true;
    protected $id = 'poloniex';
    protected $account_id = null;

    public function __construct($account= null)
    {

        $this->api = new Client($account->credentials['apiKey'], $account->credentials['apiSecret']);
    }

    /**
     * @inheritDoc
     */
    public function account()
    {
        $balance=$this->api->returnBalances();
        if (is_array($balance)){
            $account['balances'] = array_map(function ($item,$key) {
                return [
                    'asset' => $key,
                    'free' => $item,
                    'locked' => $item,
                ];

            }, $balance,array_keys($balance));
        }

        return response()->json($account);
    }

    /**
     * @inheritDoc
     */
    public function exchangeInfo()
    {
        $data=[];
        try {
            $info = $this->api->returnTicker();
            $data['symbols'] = array_map(function ($item,$key) {
                $pair=explode('_',$key);
                return [
                    'symbol' => $pair[0].$pair[1],
                    'baseAsset' => $pair[0],
                    'quoteAsset' =>$pair[1],
                    'orderTypes' => [],
                    'key' => $key
                ];
            }, $info,array_keys($info));

        } catch (\Exception $e) {
            $data = $e->getMessage();
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

    function getApiKey()
    {
        $credentials = $this->getUserCredentials();

        $key = !empty($credentials['apiKey']) && !$this->use_testnet
            ? $credentials['apiKey']
            : env('MIX_POLINIEX_API_KEY');

        return $key;
    }

    public function getApiSecret()
    {
        $credentials = $this->getUserCredentials();

        return !empty($credentials['apiSecret']) && !$this->use_testnet
            ? $credentials['apiSecret']
            : env('MIX_POLINIEX_API_SECRET');
    }

    public function getUserCredentials()
    {
        $exchange = Exchange::where('slug', $this->account_id)->first();

        if (!$exchange) return $exchange;

        $user_id = auth()->id();

        $user_exchange = UserExchange::where([
            ['user_id', $user_id],
            ['exchange_id', $exchange->id],
        ])
            ->first();

        return $user_exchange ? $user_exchange->credentials : null;
    }


}
