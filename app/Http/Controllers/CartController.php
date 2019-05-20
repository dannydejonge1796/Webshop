<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
	function cartAction(Request $request)
    {
    	$categories = Category::all();

    	if (!Session::has('cart')) {
            return view('cart.index', ['categories' => $categories, 'products' => null]);
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('cart.index', ['categories' => $categories, 'products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    
    /**
     * Add products to shoppingcard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCartAction(Request $request)
    {

        $productId = $request->get('product');
        $product = Product::find($productId);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        // $request->session()->put('products', []);

        // $cart = new Cart();
        // $cart->add($product, 1);

        // $viewCart = $cart->view();

        // var_dump($viewCart);

        // exit();

        return redirect()->action(
            'ProductController@index'
        );
    } 

    /**
     * Delete complete cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteCartAction(){

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->deleteAll();

        return redirect()->action(
            'ProductController@index'
        );

    }
}
