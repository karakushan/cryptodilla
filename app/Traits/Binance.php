<?php


namespace App\Traits;

use Lin\Exchange\Exchanges;
use Illuminate\Support\Facades\Http;

trait Binance
{
    private $api;
    private $url;
    private $apiKey;
    private $apiSecret;
    private $testnet = true;
    private $id = 'binance';
    private $baseUrl = 'https://api.binance.com/api';
    private $testnetBaseUrl = 'https://testnet.binance.vision/api';
    private $time = null;

    public function __construct()
    {
        $this->setCredentials();
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
        if (!isset($query_params['timestamp'])) {
            $timestamp = Http::get($this->url . '/v3/time')->json()['serverTime'];
            $query_params['timestamp'] = $timestamp;
        }

        $query = http_build_query($query_params, '', '&');

        $query_params['signature'] = hash_hmac('sha256', $query, $this->apiSecret);

        $response = Http::withHeaders([
            'X-MBX-APIKEY' => $this->apiKey,
        ])->{$method}($this->url.$endpoint , $query_params);

        return $response->json();
    }


    /**
     * Устанавливает секретные данные запроса
     */
    public function setCredentials()
    {
        $this->url = env('MIX_BINANCE_TEST_BASE_URL');
        $this->apiKey = env('MIX_BINANCE_API_KEY');
        $this->apiSecret = env('MIX_BINANCE_API_SECRET');
        if ($this->testnet) {
            $this->url = $this->testnetBaseUrl;
        } else {
            $this->url = $this->baseUrl;
        }
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
        return Http::get($this->url . '/v3/exchangeInfo')->json();
    }

    /**
     * Get all account orders; active, canceled, or filled.
     *
     * @param $symbol
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function binanceGetOrders($symbol)
    {
        return $this->send('/v3/allOrders', ['symbol' => $symbol]);
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
        return $this->send('/v3/account');
    }

    /**
     * Создание buy ордера
     *
     * @param array $data
     * @return array|array[]
     */
    public function binanceCreateOrderBuy($data = [])
    {
        $data = array_merge([
            'timeInForce' => 'GTC',
        ], $data);

        if ($data['type'] == 'MARKET') {
            $data = array_filter($data, function ($item) {
                return in_array($item, ['symbol', 'type', 'quantity']);
            }, ARRAY_FILTER_USE_KEY);
        }

        return $this->api->trader()->buy($data);
    }

    /**
     * Создание sell ордера
     *
     * @param array $data
     * @return array|array[]
     */
    public function binanceCreateOrderSell($data = [])
    {
        $data = array_merge([
            'timeInForce' => 'GTC',
        ], $data);

        $this->api->trader()->sell($data);
        return $this->api->trader()->buy($data);
    }


}
