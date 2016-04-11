<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('frontend.pages.products', compact('products'));
    }
}
