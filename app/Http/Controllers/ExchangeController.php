<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\ExchangeRequest;
use App\Http\Requests\UserExchangeRequest;
use App\Models\Exchange;
use App\Models\UserExchange;

use Illuminate\Http\Request;
use App\Services\ExchangeConnector;

class ExchangeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Exchange::orderBy('id', 'desc')->get();
        $title = __('Список бирж');

        return view('dashboard.exchange.index', compact('items', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $title = __('Добавление биржи');

        return view('dashboard.exchange.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExchangeRequest $request)
    {
        Exchange::create($request->all());

        return redirect()->route('exchanges.index')->with([
            'status' => 'success',
            'message' => 'Объект успешно добавлен!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Exchange::findOrFail($id);

        $title = __('Изменение биржи');

        return view('dashboard.exchange.edit', compact('title', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Exchange::findOrFail($id);
        $item->fill($request->all());
        $item->status = $request->has('status') ? intval($request->input('status')) : 0;
        $item->save();

        return redirect()->route('exchanges.index')->with([
            'status' => 'success',
            'message' => 'Данные успешно обновлены!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exchange::findOrFail($id)->delete();

        return redirect()->route('exchanges.index')->with([
            'status' => 'success',
            'message' => 'Объект успешно удален!'
        ]);
    }

    /**
     * Возвращает данные {$slug} биржи
     * @param $slug
     * @return int
     */
    public function getExchangeInfo($slug)
    {
        try {
            return (new ExchangeConnector())->connect($slug)
                ->exchangeInfo();
        } catch (\Exception $exception) {
            return response($exception->getMessage())
                ->status(419);
        }
    }

    /**
     * Возвращает данные {$slug} биржи
     * @param $slug
     * @return int
     */
    public function getOrders(Request $request)
    {
        try {
            $account = UserExchange::findOrFail($request->input('account_id'));

            return (new ExchangeConnector())->connect($account->exchange->slug, $account->id)
                ->getAllOrders($request->input('symbol'));
        } catch (\Exception $exception) {
            return response($exception->getMessage())
                ->status(419);
        }
    }

    /**
     * Возвращает данные {$slug} биржи
     * @param $slug
     * @return int
     */
    public function getOpenOrders($slug, Request $request)
    {
        try {
            $allOrders = $this->{$slug . 'GetOpenOrders'}($request->input('symbol'));

            return response()->json($allOrders);
        } catch (\Exception $exception) {
            return response($exception->getMessage())
                ->status(419);
        }
    }

    public function getAccount($id)
    {

        try {
            $account = UserExchange::findOrFail($id);
            return (new ExchangeConnector())->connect($account->exchange->slug, $id)
                ->account();
        } catch (\Exception $exception) {
            return response($exception->getMessage())
                ->status(419);
        }
    }

    /**
     * Создание ордера
     *
     * @param $slug
     * @param CreateOrderRequest $request
     * @return int
     */
    public function createOrder($slug, CreateOrderRequest $request)
    {
        $order = (new ExchangeConnector())->connect($slug, (int)$request->input('account_id'))
            ->createOrder($request->all());

        return $order;
    }

    /**
     * Добавляет данные биржи к пользователю
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function attachUserExchange(UserExchangeRequest $request)
    {
        $credentials = $request->json('credentials');

        UserExchange::updateOrInsert(
            ['user_id' => auth()->id(), 'exchange_id' => $request->input('exchange_id')],
            ['credentials' => json_encode($credentials), 'title' => $request->input('title')]
        );

        return response()->json(['message' => __('Данные биржи успешно привязаны к Вашему аккаунту!')]);
    }

    /**
     * Удаляет связь пользователя с биржой
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deattachUserExchange(Request $request)
    {
        $exchange = UserExchange::where(['user_id' => auth()->id(), 'exchange_id' => $request->input('exchange_id')])->first();
        $exchange->delete();

        return response()->json(['message' => __('Биржа успешно отвязана!')]);
    }

    /**
     * Получает список бирж
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getExchanges()
    {
        $exchanges = Exchange::where('status', 1)->get();

        return response()->json($exchanges);
    }

    public function cancelOrder($slug, Request $request)
    {
        return $this->{$slug . 'CancelOrder'}($request->all());
    }

    /**
     * Устанавливает активный аккаунт биржи
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function setActiveAccount(Request $request)
    {
        $exchanges = UserExchange::where('user_id', auth()->id());
        $exchanges->update(['active' => false]);

        $exchange = UserExchange::where('id', (int)$request->input('account'));
        $exchange->update(['active' => true]);

        return response()->json(['message' => __('Account successfully connected')]);
    }
}
