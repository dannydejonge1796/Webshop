<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{

    private $cart;

    public function __construct() {
        $this->cart = new Cart();
    }

	function cartAction(Request $request)
    {
    	$categories = Category::all();

    	if (!Session::has('cart')) {
            return view('cart.index', ['categories' => $categories, 'products' => null]);
        }

        return view('cart.index', [
            'categories' => $categories, 
            'products' => $this->cart->getItems(), 
            'totalQty' => $this->cart->GetTotalItemCount(),
            'totalPrice' => $this->cart->GetTotalPrice()]);
    }


    /**
     * Empties the cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function kill() {
        session()->put('cart', null);
        return redirect()->back();
    }

    
    /**
     * Add products to shoppingcard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCartAction(Request $request)
    {
        $category = $request->get('category');

        $productId = $request->get('product');
        $product = Product::find($productId);

        $this->cart->add($product, $product->id);

        return redirect()->back();
    } 

    /**
     * Delete complete cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteCartAction(){

        $this->cart->deleteAll();

        return redirect()->action(
            'CartController@cartAction'
        );

    }
}