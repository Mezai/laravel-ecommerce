<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use Cart;
use View;

class CartController extends Controller
{

 

    /**
     * Add a product to the cart
     * @param
     * @return
     * @author Mezai
     */

    public function store()
    {

        if (Request::isMethod('POST')) {
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->title, 'qty' => 1, 'price' => $product->price));
        }
        $cart = Cart::content();

        return redirect()->back();
    }

    

    /**
     * Update a product in cart
     * @param
     * @return
     * @author Mezai
     */

    public function update()
    {
        if (Request::isMethod('PATCH')) {

        }    
    }

    /**
     * Remove a product in cart
     * @param
     * @return
     * @author Mezai
     */
    public function destroy($productId)
    {
        if (Request::isMethod('DELETE')) {

            $rowId = Cart::search(array('id' => $productId));

            Cart::remove($rowId[0]);

            return back();
        }        

    }
}
