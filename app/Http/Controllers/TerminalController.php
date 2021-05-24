<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Exchange;
use App\Models\UserExchange;
use Illuminate\Http\Request;
use App\Models\User;

class TerminalController extends Controller
{
    public function index()
    {
        $user=User::where('id',auth()->id())->with('exchanges')->first();

        $data = [
            'exchanges' => Exchange::where('status', 1)->get(),
            'user' => $user,
            'currencies' =>Currency::where('status', 1)->get(),
        ];
        return view('terminal', compact('data'));
    }
}
