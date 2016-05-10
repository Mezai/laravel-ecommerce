<?php

namespace App\Http\Controllers\Back\Admin;


use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests;
use Request;


class ProductsController extends Controller {
	
	

	public function index()
	{
		$products = Product::all();

		return view('back.pages.products', compact('products'));
	}

	public function store()
	{
		# code...
	}
	public function create()
	{
		return view('back.pages.products');
	}
}