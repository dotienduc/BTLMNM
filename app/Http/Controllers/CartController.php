<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    public function displayCart()
    {
    	return view('cart');
    }

    public function addToCart(Request $rq)
    {
    	$product = Product::findOrFail($rq->id_product);

    	$oldCart = Session::has('cart') ? Session::get('cart') : null;

    	$cart = new Cart($oldCart);

    	$cart->add($product, $rq->id_product);

    	$rq->session()->put('cart', $cart);

    	return view('dataAjax.cart-ajax', ['items' => $cart->items,
    									 'qtyTotal' => $cart->totalQty,
    									 'totalPrice' => $cart->totalPrice ]);
    }

    public function delItem(Request $rq)
    {
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;

    	$cart = new Cart($oldCart);

    	$cart->deleteItem($rq->id_product);

    	$rq->session()->put('cart', $cart);
    	return view('dataAjax.cart-ajax', ['items' => $cart->items,
    									 'qtyTotal' => $cart->totalQty,
    									 'totalPrice' => $cart->totalPrice ]);
    }
}
