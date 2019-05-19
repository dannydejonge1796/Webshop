<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
	function cartAction(Request $request)
    {
    	$categories = Category::all();

    	$data = $request->session()->all();
    	var_dump($data);

    	return view('cart.index', ['categories' => $categories]);
    }

    
    /**
     * Add products to shoppingcard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCartAction(Request $request)
    {
        // $id = $request->get('product');
        // $product = DB::table('products')->where('id', $id)->get();
        // $category_id = $product->first()->category_id;
        // $categoryEr = DB::table('categories')->where('id', $category_id)->get();
        // $category = $categoryEr->first()->id; 
        
        $product = $request->get('product');

        $request->session()->put('products', []);

        $cart = new Cart();
        $cart->add($product, 1);

        // $viewCart = $cart->view();

        // var_dump($viewCart);

        // exit();

        return redirect()->action(
            'ProductController@index'
        );
    } 
}
