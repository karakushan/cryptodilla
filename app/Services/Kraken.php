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

    public function __construct($account_id = null)
    {
        $this->account_id = $account_id;
        $http_client = new \GuzzleHttp\Client();
        $api_key = $this->getApiKey();
        $api_secret = $this->getApiSecret();

        $this->api = new Client($http_client, $api_key, $api_secret);
    }

    /**
     * @inheritDoc
     * @throws \Butschster\Kraken\Exceptions\KrakenApiErrorException
     */
    public function account()
    {
        $account = [];
        try {
            $account['balances'] = $this->api->getAccountBalance();
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

    function getApiKey()
    {
        $credentials = $this->getUserCredentials();

        $key = !empty($credentials['apiKey']) && !$this->use_testnet
            ? $credentials['apiKey']
            : env('MIX_KRAKEN_API_KEY');

        return $key;
    }

    public function getApiSecret()
    {
        $credentials = $this->getUserCredentials();

        return !empty($credentials['apiSecret']) && !$this->use_testnet
            ? $credentials['apiSecret']
            : env('MIX_KRAKEN_API_SECRET');
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
