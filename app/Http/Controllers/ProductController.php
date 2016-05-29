<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $image = ProductImage::find(7);

        return view('front.pages.products', ['products' => $products, 'image' => $image]);
    }
}
