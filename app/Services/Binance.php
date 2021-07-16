<?php


namespace App\Services;

use App\Events\ExchangeTickerEvent;
use App\Models\Currency;
use App\Models\Exchange;
use App\Models\UserExchange;
use Binance\API;
use Illuminate\Support\Facades\Http;

class Binance implements ExchangeInterface
{
    protected $api;
    protected $use_testnet = true;
    protected $id = 'binance';
    protected $account_id = null;

    public function __construct($account)
    {
        $api_key = $account && !empty($account->credentials['apiKey']) && !$this->use_testnet
            ? $account->credentials['apiKey'] : env('MIX_BINANCE_API_KEY');
        $api_secret = $account && !empty($account->credentials['apiSecret']) && !$this->use_testnet
            ? $account->credentials['apiSecret'] : env('MIX_BINANCE_API_SECRET');

        $this->api = new API(
            $api_key,
            $api_secret,
            $this->use_testnet
        );
    }

    public function account()
    {
        return response()->json($this->api->account());
    }

    public function connector(string $apiKey, string $apiSecret, $demo = false, $data = [])
    {
        // TODO: Implement connector() method.
    }

    public function exchangeInfo()
    {
        $info = $this->api->exchangeInfo();
        $info['symbols'] = array_map(function ($item) {
            $currency = Currency::where('slug',mb_strtolower($item['baseAsset']))->first();
            if ($currency && isset($currency->logo_url)) {
                $item['logo_url'] = $currency->logo_url;
            }
            return $item;
        }, array_values($info['symbols']));

        return response()->json($info);
    }

    public function createOrder($data = [])
    {
        $valid_params = [
            'MARKET' => ['quantity', 'quoteOrderQty'],
            'LIMIT' => ['timeInForce', 'quantity', 'price'],
            'STOP_LOSS' => ['quantity', 'stopPrice'],
            'LIMIT_MAKER' => ['quantity', 'price'],
            'TAKE_PROFIT' => ['quantity', 'stopPrice'],
            'STOP_LOSS_LIMIT' => ['timeInForce', 'quantity', 'price', 'stopPrice'],
            'TAKE_PROFIT_LIMIT' => ['timeInForce', 'quantity', 'price', 'stopPrice'],
        ];

        $data = array_filter($data, function ($item) use ($valid_params, $data) {
            $params = array_merge($valid_params[$data['type']], ['symbol', 'side', 'type', 'newClientOrderId', 'icebergQty', 'newOrderRespType']);
            return in_array($item, $params);
        }, ARRAY_FILTER_USE_KEY);

        try {
            $data['side'] = strtolower($data['side']);
            if ($data['type'] == 'MARKET' && $data['side'] == 'buy') {
                $order = $this->api->marketBuy($data['symbol'], $data['quantity']);
            } elseif ($data['type'] == 'MARKET' && $data['side'] == 'sell') {
                $order = $this->api->marketSell($data['symbol'], $data['quantity']);
            } elseif ($data['type'] != 'MARKET' && $data['side'] == 'buy') {
                $custom = [];
                if (isset($data['stopPrice'])) {
                    $custom['stopPrice'] = (float)$data['stopPrice'];
                }
                $order = $this->api->buy($data['symbol'], (float)$data['quantity'], (float)$data['price'], $data['type'], $custom);
            } elseif ($data['type'] != 'MARKET' && $data['side'] == 'sell') {
                $custom = [];
                if (isset($data['stopPrice'])) {
                    $custom['stopPrice'] = (float)$data['stopPrice'];
                }
                $order = $this->api->sell($data['symbol'], (float)$data['quantity'], (float)$data['price'], $data['type'], $custom);
            }

            $message = __('Ордер успешно создан');

            return compact('order', 'message');
        } catch (Exception $e) {
            $exception = json_decode($e->getMessage(), true);

            if (isset($exception['msg'])) $message = $exception['msg'];
            else $message = __('Возникла ошибка при открытии ордера');

            return response()->json(compact('message'), 419);
        }
    }

    public function cancelOrder($order_id)
    {
        // TODO: Implement cancelOrder() method.
    }

    public function cancelAllOrders()
    {
        // TODO: Implement cancelAllOrders() method.
    }

    public function getAllOrders($symbol)
    {
        return response()->json($this->api->orders($symbol));
    }
}
