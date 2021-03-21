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

    /**
     * Возвращает информацию об аккаунте, балансе аккаунта
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function getAccount(Request $request)
    {
        $info = $this->api->account();
        return response()->json($info);
    }

    /**
     * Открывает тестовый ордер
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function orderOpenTest(Request $request)
    {
        if ($request->input('type') == 'sell') {
            $order = $this->api->sellTest(
                $request->input('symbol'),
                $request->input('quantity'),
                $request->input('price'),
                "LIMIT",
                [],
                true
            );
        } else {
            $order = $this->api->buyTest();
        }
        return response()->json($order);
    }

    public function getOrders(Request $request){
        $orders = $this->api->orders($request->input('symbol'));
        return response()->json($orders);
    }
}
