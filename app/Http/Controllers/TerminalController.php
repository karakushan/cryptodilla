<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Illuminate\Http\Request;

class TerminalController extends Controller
{
    public function index()
    {
        $data = [
            'exchanges' => Exchange::where('status', 1)->get()
        ];
        return view('terminal', compact('data'));
    }
}
