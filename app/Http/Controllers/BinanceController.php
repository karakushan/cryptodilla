<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BinanceController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new \Binance\API(env('MIX_BINANCE_API_KEY'), env('MIX_BINANCE_API_SECRET'));
    }

    public function getExchangeInfo(Request $request)
    {
        $info = $this->api->exchangeInfo();
        return response()->json(array_values($info['symbols']));
    }
}
