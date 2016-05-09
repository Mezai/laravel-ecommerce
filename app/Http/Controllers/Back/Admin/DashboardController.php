<?php

namespace App\Http\Controllers\Back\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Auth;
use App\Admin;

class DashboardController extends Controller
{
    
    
    public function index()
    {
        return view('back.pages.dashboard');
    }
}
