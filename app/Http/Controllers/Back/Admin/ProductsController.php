<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests;
use App\Http\Requests\CreateProductRequest;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\ProductImage;

class ProductsController extends Controller
{

    private function saveImage($id, CreateProductRequest $request)
    {

        $image = $request->file('image');

        $imageName = $image->getClientOriginalName(); 
                
        $path = public_path('img')."/";

        $image_path_small = $path.'_small_'.$imageName;

        $image_path_large = $path.'_large_'.$imageName;

        Image::make(Input::file('image'))->resize(300, 200)->save($image_path_large);

        Image::make(Input::file('image'))->resize(50,50)->save($image_path_small);

        ProductImage::updateOrCreate(
            ['product_id' => $id],
            ['name' => $imageName,
             'path' => 'img/'.'_large_'.$imageName,
             'product_id' => $id
            ]
        );

        ProductImage::updateOrCreate(
            ['product_id' => $id],
            ['name' => $imageName,
             'path' => 'img/'.'_small_'.$imageName,
             'product_id' => $id
            ]
        );


    }
    
    public function index()
    {

        $products = Product::paginate(10);
            
        return view('back.pages.products.index', ['pagination' => $products, 'products' => $products]);
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
