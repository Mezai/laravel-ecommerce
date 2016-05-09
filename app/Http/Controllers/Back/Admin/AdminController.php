<?php

namespace App\Http\Controllers\Back\Admin;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
   }
public function index(){
        return view('back.pages.dashboard');
    }
}