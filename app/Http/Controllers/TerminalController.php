<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerminalController extends Controller
{
    public function index()
    {
        return view('terminal');
    }

    /**
     * Возвращает список бирж
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getExchanges()
    {
        return response()->json(array_values(config('exchanges')));
    }
}
