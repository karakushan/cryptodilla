<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Exchange;
use App\Models\UserExchange;
use Illuminate\Http\Request;

class TerminalController extends Controller
{
    public function index()
    {
        $data = [
            'exchanges' => Exchange::where('status', 1)->get(),
            'user' => auth()->user(),
            'currencies' =>Currency::where('status', 1)->get(),
        ];
        return view('terminal', compact('data'));
    }
}
