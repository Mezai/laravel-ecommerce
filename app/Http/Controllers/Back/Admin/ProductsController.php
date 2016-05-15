<?php

namespace App\Http\Controllers\Back\Admin;


use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests;
use App\Http\Requests\CreateProductRequest;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;

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

	public function edit($id)
	{
		$product = Product::findOrFail($id);

		return view('back.pages.products.edit', compact('product'));
	}

	public function update($id, CreateProductRequest $request)
	{
		$product = Product::findOrFail($id);

		$product->update($request->all());

		return $request->all();
	}

	public function create()
	{
		return view('back.pages.products.create');
	}
	public function store(CreateProductRequest $request)
	{
		$product = Product::create($request->all());


		$path = public_path('img')."/";
		
		Image::make(Input::file('image'))->resize(300, 200)->save($path.$product->id.'.png');

		
		return redirect('admin/products');
	}

}