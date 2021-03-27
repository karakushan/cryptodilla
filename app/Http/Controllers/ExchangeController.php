<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExchangeRequest;
use App\Models\Exchange;
use App\Traits\Binance;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    use Binance;

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
            return response()->json($this->{$slug . 'GetInfo'}());
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
    public function getOrders($slug, Request $request)
    {
        try {
            return response()->json($this->{$slug . 'GetOrders'}($request->input('symbol')));
        } catch (\Exception $exception) {
            return response($exception->getMessage())
                ->status(419);
        }
    }

    public function getAccount($slug)
    {
        try {
            return $this->{$slug . 'GetAccount'}();
        } catch (\Exception $exception) {
            return response($exception->getMessage())
                ->status(419);
        }
    }
}
