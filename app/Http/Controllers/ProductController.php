<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Cart;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $id = $request->get('category');
        
        $categories = Category::all();
        $products = Product::all();
        if($id !== null){
            $products = DB::table('products')->where('category_id', $id)->get();
        }

        //Cart proberen

        // $cart = new Cart; 

        // $viewCart = $cart->view();
        
        return view('products.index', ['products' => $products, 'categories' => $categories]);
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
