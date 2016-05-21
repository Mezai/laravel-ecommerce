<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function __construct()
    {
        parent__::construct();
    }

    public function products()
    {
        //Query db for all products

      return view('front.pages.products');
    }

    public function categories()
    {
        //fetch the categories for db and return them
      return view('front.pages.categories');
    }
}
