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

    public function add()
    {
        if (Request::isMethod('post')) {
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->title, 'qty' => 1, 'price' => $product->price));
        }
        $cart = Cart::content();

        return redirect()->back();
    }

    /**
     * Destroy the cart
     * @param
     * @return
     * @author Mezai
     */

    public function destroy()
    {
        $cart = Cart::content();
        Cart::destroy();

        return view('front.pages.checkout', compact('cart'));
    }

    /**
     * Update a product in cart
     * @param
     * @return
     * @author Mezai
     */

    public function update()
    {
        if (Request::isMethod('get')) {
            $product_id = Request::get('product_id');

            $rowId = Cart::search(array('id' => $product_id));

            $item = Cart::get($rowId[0]);

            if (Request::get('increment') === 1) {
                Cart::update($rowId[0], $item->qty + 1);
            } elseif (Request::get('decrement') === 1) {
                Cart::update($rowId[0], $item->qty - 1);
            }

            $cart = Cart::content();

            return view('front.pages.checkout', compact('cart'));
        }
    }

    /**
     * Remove a product in cart
     * @param
     * @return
     * @author Mezai
     */
    public function remove()
    {

        //get the id
        if (Request::isMethod('post')) {
            $product_id = Request::get('product_id');
            $rowId = Cart::search(array('id' => $product_id));

            Cart::remove($rowId[0]);

            $cart = Cart::content();

            return view('front.pages.checkout', compact('cart'));
        }
    }
}
