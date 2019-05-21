<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Cart;
use Illuminate\Http\Request;
use Session;
use DB;

class ProductController extends Controller
{
    private $cart;

    public function __construct() {
        $this->cart = new Cart();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $id = $request->get('category');
        $category = null;
        
        $categories = Category::all();
        $products = Product::all();
        $cartItems = $this->cart->getItems();

        if($id !== null){
            $category = DB::table('categories')->where('id', $id)->get();
            $products = DB::table('products')->where('category_id', $id)->get();
        }

        return view('products.index', [
            'products' => $products, 
            'cartItems' => $cartItems,
            'categories' => $categories, 
            'category' => $category]);
    }
    
    
    /**
     * Display detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailsAction(Request $request)
    {
        $id = $request->get('product');
    
        $categories = Category::all();
        $product = DB::table('products')->where('id', $id)->get();

        return view('products.details', ['product' => $product, 'categories' => $categories]); 
    } 
}
