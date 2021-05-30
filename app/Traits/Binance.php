<?php


namespace App\Traits;

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
        $this->api = new API($this->getApiKey(), $this->getApiSecret(), $this->use_testnet);
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
     * Устанавливает связь с биржей
     * @return Exchanges
     */
    protected function connector()
    {
        return new Exchanges($this->id, $this->getApiKey(), $this->getApiSecret(), $this->getUrl());
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
        return $this->api->exchangeInfo();
    }

    /**
     * Get all account orders; active, canceled, or filled.
     *
     * @param $symbol
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function binanceGetOrders($symbol)
    {
        return $this->api->orders($symbol);
    }

    /**
     * Get all account orders; active, canceled, or filled.
     *
     * @param $symbol
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function binanceGetOpenOrders($symbol)
    {

        return $this->api->openOrders($symbol);
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
        return $this->api->account();
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
            $order = $this->connector()->getPlatform('spot')->trade()->postOrder($data);
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
        $user_exchange = UserExchange::whereHas('exchange', function ($query) {
            $query->where('slug', $this->id);
        })
            ->where('user_id', auth()->id())
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

        return $credentials && !empty($credentials['apiKey '])
            ? $credentials['apiKey ']
            : env('MIX_BINANCE_API_KEY', "Ik7gOQWFfdYxwGr7QqK4Iw8JsfV3QVCfUeSINpOz9SmQMb1TJLMPVCX2nhJn5J4T");
    }

    /**
     * @return mixed
     */
    public function getApiSecret()
    {
        $credentials = $this->getUserCredentials();

        return $credentials && !empty($credentials['apiSecret '])
            ? $credentials['apiSecret ']
            : env('MIX_BINANCE_API_SECRET', "ZVmAv8CzhzeXf4rkLaG4SONW7cpTbRsayKCP79QI0h9tV76jHpO81jRilwJX2ZPV");
    }
}
