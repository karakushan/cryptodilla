<?php


namespace App\Services;

use App\Models\Exchange;
use App\Models\UserExchange;
use Butschster\Kraken\Client;
use Butschster\Kraken\Contracts\Order as OrderContract;
use Butschster\Kraken\Order;
use App\Models\Currency;


class Kraken implements ExchangeInterface
{
    protected $api;
    protected $use_testnet = true;
    protected $id = 'kraken';
    protected $account_id = null;

    public function __construct($account)
    {
        $client = new\GuzzleHttp\Client();
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
                $data['symbols'] = array_values(array_map(function ($item) {
                    $currency = Currency::where('slug',mb_strtolower($item['base']))->first();
                    if ($currency && isset($currency->logo_url)) {
                        $item['logo_url'] = $currency->logo_url;
                    }
                    return array_merge($item, [
                        'symbol' => $item['altname'],
                        'baseAsset' => $item['base'],
                        'quoteAsset' => $item['quote'],
                        'baseName' => $item['base'],
                        'quoteName' => $item['quote'],
                        'min'=>floatval($item['ordermin'] ?? 0),
                        'orderTypes' => [
                            'market',
                            'limit',
                            'stop-loss',
                            'take-profit',
                            'stop-loss-profit',
                            'stop-loss-profit-limit' .
                            'stop-loss-limit',
                            'take-profit-limit',
                            'trailing-stop',
                            'trailing-stop-limit',
                            'stop-loss-and-limit',
                            'settle-position'
                        ]]);
                }, $assets));
            }
        } catch (\Exception $e) {
            $data = $e->getMessage();
        }

        return response()->json($data);
    }

    public function createOrder(array $data)
    {
        try {
            $side = $data['side'] == 'BUY' ? OrderContract::TYPE_BUY : OrderContract::TYPE_SELL;

            $order = new Order($data['symbol'], $side, $data['type'], (float)$data['quantity']);
            $order = $this->api->addOrder($order);
            $message = __('Ордер успешно открыт');
            $status = 200;

        } catch (\Exception $e) {
            $order = null;
            $message = $e->getMessage();
            $status = 419;
        }


        return response()->json(compact('order', 'message'), $status);

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
        $response = $this->api->getClosedOrders()->toArray();
        $orders = [];

        if (!empty($response)) {
            $orders = array_map(function ($item) {
                return [
                    'symbol' => $item['descr']['pair'],
                    'side' => $item['descr']['type'],
                    'type' => $item['descr']['ordertype'],
                    'executedQty' => $item["vol"],
                    'price' => $item['descr']['price'],
                    'time' => $item["opentm"],
                    'status' => $item["status"]
                ];
            }, $response);
        }

        return response()->json(array_values($orders));
    }
}
