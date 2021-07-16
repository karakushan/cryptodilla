<?php


namespace App\Services;

use App\Models\Exchange;
use App\Models\UserExchange;
use poloniex\api\Poloniex as Client;
use App\Models\Currency;


class Poloniex implements ExchangeInterface
{
    protected $api;
    protected $use_testnet = false;
    protected $id = 'poloniex';
    protected $account_id = null;

    public function __construct($account = null)
    {

        $this->api = new Client($account->credentials['apiKey'] ?? '', $account->credentials['apiSecret'] ?? '');
    }

    /**
     * @inheritDoc
     */
    public function account()
    {
        $balance = $this->api->returnBalances();
        if (is_array($balance)) {
            $account['balances'] = array_map(function ($item, $key) {
                return [
                    'asset' => $key,
                    'free' => $item,
                    'locked' => $item,
                ];

            }, $balance, array_keys($balance));
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
            $info = $this->api->returnTicker();
            $data['symbols'] = array_map(function ($item, $key) {
                $pair = explode('_', $key);
                $baseAsset = $pair[1];
                $quoteAsset = $pair[0];
                $item=[
                    'symbol' => $baseAsset . $quoteAsset,
                    'baseAsset' => $baseAsset,
                    'quoteAsset' => $quoteAsset,
                    'baseName' => $baseAsset,
                    'quoteName' => $quoteAsset,
                    'price' => $item['last'] ?? '',
                    'volume' => $item['baseVolume'] ?? '',
                    'change' => $item['percentChange'] ?? '',
                    'orderTypes' => [
                        'limit'
                    ],
                    'key' => $key,
                ];
                $currency = Currency::where('slug',mb_strtolower($baseAsset))->first();
                if ($currency && isset($currency->logo_url)) {
                    $item['logo_url'] = $currency->logo_url;
                }
                return $item;
            }, $info, array_keys($info));

        } catch (\Exception $e) {
            $data = $e->getMessage();
        }

        return response()->json($data);
    }

    public function createOrder(array $data)
    {
        $symbol = $data['quoteAsset'] . '_' . $data['baseAsset'];
        $quantity = $data['quantity'];
        $price = $data['price'];
        try {

            if ($data['side'] == 'BUY') {
                $order = $this->api->buy($symbol, $price, $quantity, [
                    'total' => $quantity
                ]);
            } else {
                $order = $this->api->sell($symbol, $price, $quantity, [
                    'total' => $quantity
                ]);
            }
            $status = 200;
            $message = $order;
        } catch (\Exception $e) {
            $order = null;
            $message = $e->getMessage();
            $status = 419;
        }


        return response()->json(compact('order', 'message'), $status);
    }

    public function cancelOrder($order_id, $symbol = '')
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
        $orders=$this->api->returnTradeHistory('all');
        return response()->json($orders);
    }
}
