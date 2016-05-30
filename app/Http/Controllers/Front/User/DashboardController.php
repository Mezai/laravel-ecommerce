<?php

namespace App\Http\Controllers\Front\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('front.user.dashboard');
    }

    public function orders()
    {
    	return view('front.user.dashboard');
    }
}
