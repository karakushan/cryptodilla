<?php


namespace App\Traits;

use App\Models\Exchange;
use App\Models\UserExchange;
use Lin\Binance\Exceptions\Exception;
use Lin\Exchange\Exchanges;
use Illuminate\Support\Facades\Http;
use Binance\API;

trait Binance
{
    private $api;
    private $url;
    private $apiKey;
    private $apiSecret;
    private $use_testnet = true;
    private $id = 'binance';
    private $baseUrl = 'https://api.binance.com';
    private $testnetBaseUrl = 'https://testnet.binance.vision';
    private $time = null;
    private $timeout = 10;

    public function __construct()
    {

    }

    /**
     * Устанавливает связь с Binance API
     */
    private function connector()
    {
        $key = $this->getApiKey();
        $secret = $this->getApiSecret();

        return new API($key, $secret, $this->use_testnet);
    }

    /**
     * Отправляет запрос на указанный endpoint
     *
     * @param string $endpoint конечная точка
     * @param string $method метод
     * @param array $query_params параметры запроса
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    protected function send(string $endpoint, $query_params = [], $method = 'get')
    {
//        if (!isset($query_params['timestamp'])) {
//            $timestamp = Http::get($this->url . '/api/v3/time')->json()['serverTime'];
//            $query_params['timestamp'] = $timestamp;
//        }


//        $query_params['timestamp'] = number_format(microtime(true) * 1000, 0, '.', '');

        $query = http_build_query($query_params, '', '&');

//        $query_params['signature'] = hash_hmac('sha256', $query, $this->getApiSecret());

        $response = Http::timeout($this->timeout)->withHeaders([
            'X-MBX-APIKEY' => $this->getApiKey(),
        ])->{$method}($this->getUrl() . $endpoint, $query_params);

        return $response->json();
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->use_testnet ? $this->testnetBaseUrl : $this->baseUrl;
    }


    /**
     * Current exchange trading rules and symbol information
     *
     * @see https://binance-docs.github.io/apidocs/spot/en/#exchange-information
     *
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function binanceGetInfo()
    {

        $info = $this->connector()->exchangeInfo();

        return $info;
    }

    /**
     * Get all account orders; active, canceled, or filled.
     *
     * @param $symbol
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function binanceGetOrders($symbol)
    {
        return $this->connector()->orders($symbol);
    }

    /**
     * Get all account orders; active, canceled, or filled.
     *
     * @param $symbol
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function binanceGetOpenOrders($symbol)
    {

        return $this->connector()->openOrders($symbol);
    }


    /**
     * Get current account information
     *
     * @see https://binance-docs.github.io/apidocs/spot/en/#account-information-user_data
     *
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function binanceGetAccount()
    {
        return $this->connector()->account();
    }

    /**
     * Создание buy ордера
     *
     * @param array $data
     * @return array|array[]
     */
    public function binanceCreateOrder($data = [])
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
                $order = $this->connector()->marketBuy($data['symbol'], $data['quantity']);
            } elseif ($data['type'] == 'MARKET' && $data['side'] == 'sell') {
                $order = $this->connector()->marketSell($data['symbol'], $data['quantity']);
            } elseif ($data['type'] != 'MARKET' && $data['side'] == 'buy') {
                $custom = [];
                if (isset($data['stopPrice'])) {
                    $custom['stopPrice'] = (float)$data['stopPrice'];
                }
                $order = $this->connector()->buy($data['symbol'], $data['quantity'], $data['price'],$data['type'], $custom);
            } elseif ($data['type'] != 'MARKET' && $data['side'] == 'sell') {
                $custom = [];
                if (isset($data['stopPrice'])) {
                    $custom['stopPrice'] = (float)$data['stopPrice'];
                }
                $order = $this->connector()->sell($data['symbol'], $data['quantity'], $data['price'],$data['type'], $custom);
            }

            $message = __('Ордер успешно создан');

            return response()->json(compact('order', 'message'));
        } catch (Exception $e) {
            $exception = json_decode($e->getMessage(), true);

            if (isset($exception['msg'])) $message = $exception['msg'];
            else $message = __('Возникла ошибка при открытии ордера');

            return response()->json(compact('message'), 419);
        }
    }

    function binanceCancelOrder($data)
    {
        try {
            $order = $this->connector()->getPlatform('spot')->trade()->deleteOrder($data);
            $msg = __('Ордер успешно отменен');

            return response()->json(compact('order', 'msg'));
        } catch (Exception $e) {
            return response()->json(json_decode($e->getMessage(), true), 419);
        }
    }

    /**
     * Получает секретные данные авторизованного пользователя
     *
     * @return UserExchange|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    protected function getUserCredentials()
    {
        $exchange = Exchange::where('slug', $this->id)->first();

        if (!$exchange) return $exchange;

        $user_id = auth()->id();

        $user_exchange = UserExchange::where([
            ['user_id', $user_id],
            ['exchange_id', $exchange->id],
        ])
            ->first();

        return $user_exchange ? $user_exchange->credentials : null;
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

        return  !empty($credentials['apiSecret']) && !$this->use_testnet
            ? $credentials['apiSecret']
            : env('MIX_BINANCE_API_SECRET', "ZVmAv8CzhzeXf4rkLaG4SONW7cpTbRsayKCP79QI0h9tV76jHpO81jRilwJX2ZPV");
    }
}
