<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests;
use App\Http\Requests\CreateProductRequest;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    private function saveImage($id, CreateProductRequest $request)
    {
        $product = Product::findOrFail($id);

        $image = $request->file('image');
        
        $imageName = $image->getClientOriginalName();
        
        $product->image = $imageName;
        
        $product->save();

        $path = public_path('img')."/";
        
        Image::make(Input::file('image'))->resize(300, 200)->save($path.$imageName);
    }
    
    public function index()
    {
        $products = Product::paginate(10);
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
        
        
        $formRequest = $request->except('image');
        
        if (!isset($formRequest['active'])) {
            $formRequest['active'] = '0';
        }

        $product->update($formRequest);

        $this->saveImage($product->id, $request);

        return redirect('admin/products');
    }

    public function create()
    {
        return view('back.pages.products.create');
    }
    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->except('image'));

        $this->saveImage($product->id, $request);
        
        return redirect('admin/products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('admin/products');
    }
}
