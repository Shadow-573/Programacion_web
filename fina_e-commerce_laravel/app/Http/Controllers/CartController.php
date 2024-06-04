<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index()
    {

        $cartItems = Cart::instance('cart')->content();
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $price = $product->sale_price ? $product->sale_price : $product->regular_price;
        Cart::instance('cart')->add($product->id, $product->name, $request->quantity, $price)->associate('App\Models\Product');


        return redirect()->back()->with('message', 'Success ! Item has been added successfully!');
    }

    public function updateCart(Request $request)
    {
        if($request->quantity>0){
            Cart::instance('cart')->update($request->rowId, $request->quantity);
            return redirect()->route('cart.index');
        }
        else
        {
            Cart::instance('cart')->update($request->rowId, 1);
            return redirect()->route('cart.index');
        }

    }

    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('cart.index');
    }


    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('cart.index');
    }
}
