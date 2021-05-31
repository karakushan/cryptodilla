<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {
        $users_activities = UserActivity::all();


        return view('admin/dashboard-crypto',compact('users_activities'));
    }
}
