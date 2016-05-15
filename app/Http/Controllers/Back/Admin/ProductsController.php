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
		return view('back.pages.products.index', compact('products'));
	}

	public function show($id)
	{
		$product = Product::findOrFail($id);

		return view('back.pages.products.show', compact('product'));
	}

	public function edit(Product $product)
	{
		return 'hello';
	}

	public function create()
	{
		return view('back.pages.products.create');
	}
	public function store()
	{
		$input = Request::all();

		Product::create($input);

		return back();
	}

}