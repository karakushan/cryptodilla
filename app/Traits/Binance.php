<?php


namespace App\Traits;


trait Binance
{
    private $api;

    public function __construct()
    {
        $this->api = new \Binance\API(env('MIX_BINANCE_API_KEY'), env('MIX_BINANCE_API_SECRET'));
    }

    public function binanceGetInfo()
    {
        $info = $this->api->exchangeInfo();
        return array_values($info['symbols']);
    }

    public function binanceGetOrders($symbol)
    {
        return $this->api->orders($symbol);
    }

    public function binanceGetAccount()
    {
        return $this->api->account();
    }


}
