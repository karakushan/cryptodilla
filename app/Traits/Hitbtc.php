<?php


namespace App\Traits;

use App\Models\UserExchange;
use Http;
use ccxt\hitbtc as hb;

trait Hitbtc
{
    protected $base_url = 'https://api.hitbtc.com/api/2';
    protected $test_base_url = 'https://api.hitbtc.com/api/2';
    protected $test_mode = false;

    function getBaseUrl()
    {
        return $this->test_mode ? $this->test_base_url : $this->base_url;
    }

    /**
     * Устанавливает связь с Binance API
     */
    private function hitbtc_connector()
    {
        $key = $this->getApiKey();
        $secret = $this->getApiSecret();

        return new hb([$key, $secret]);
    }


    /**
     * Current exchange trading rules and symbol information
     *
     * @see https://binance-docs.github.io/apidocs/spot/en/#exchange-information
     *
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function hitbtcGetInfo()
    {
        $response = Http::get($this->getBaseUrl() . '/public/symbol');

        $data = [];

        if ($response->status() != 200) throw new \Exception(__('Невозможно получить данные биржи'));


        $data['symbols'] = array_map(function ($item) {
            return [
                'symbol' => $item['id'],
                'baseAsset' => $item['baseCurrency'],
                'quoteAsset' => $item['quoteCurrency'],
                'orderTypes' => []
            ];
        }, $response->json());

        return $data;
    }

    /**
     * Get current account information
     *
     * @see https://binance-docs.github.io/apidocs/spot/en/#account-information-user_data
     *
     * @param UserExchange $account
     * @return string[]
     * @throws \Exception
     */
    public function hitbtcGetAccount(UserExchange $account)
    {

        try {
            $balances = $this->hitbtc_connector()->getBalances(true);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }


        $data = [
            'balances' => []
        ];

        return response()->json($data);
    }

    private function _signature($uri, $postData)
    {
        return strtolower(hash_hmac('sha512', $uri . $postData, $this->_secret));
    }

}
