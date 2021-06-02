<?php


namespace App\Services;

use App\Models\Exchange;
use App\Models\UserExchange;
use Binance\API;

class Binance implements ExchangeInterface
{
    protected $api;
    protected $use_testnet = true;
    protected $id = 'binance';
    protected $account_id = null;

    public function __construct($account_id = null)
    {
        $this->account_id = $account_id;
        $key = $this->getApiKey();
        $secret = $this->getApiSecret();

        $this->api = new API($key, $secret, $this->use_testnet);

    }

    /**
     *
     * @return mixed
     */
    public function getApiKey()
    {
        $credentials = $this->getUserCredentials();

        $key = !empty($credentials['apiKey']) && !$this->use_testnet
            ? $credentials['apiKey']
            : env('MIX_BINANCE_API_KEY', "Ik7gOQWFfdYxwGr7QqK4Iw8JsfV3QVCfUeSINpOz9SmQMb1TJLMPVCX2nhJn5J4T");

        return $key;
    }

    /**
     * @return mixed
     */
    public function getApiSecret()
    {
        $credentials = $this->getUserCredentials();

        return !empty($credentials['apiSecret']) && !$this->use_testnet
            ? $credentials['apiSecret']
            : env('MIX_BINANCE_API_SECRET', "ZVmAv8CzhzeXf4rkLaG4SONW7cpTbRsayKCP79QI0h9tV76jHpO81jRilwJX2ZPV");
    }

    /**
     * Получает секретные данные авторизованного пользователя
     *
     * @return UserExchange|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    protected function getUserCredentials()
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
        return response()->json($this->api->exchangeInfo());
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
                $order = $this->api->buy($data['symbol'], $data['quantity'], $data['price'], $data['type'], $custom);
            } elseif ($data['type'] != 'MARKET' && $data['side'] == 'sell') {
                $custom = [];
                if (isset($data['stopPrice'])) {
                    $custom['stopPrice'] = (float)$data['stopPrice'];
                }
                $order = $this->api->sell($data['symbol'], $data['quantity'], $data['price'], $data['type'], $custom);
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
