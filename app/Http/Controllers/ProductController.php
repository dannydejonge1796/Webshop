<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
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
        
        return view('products.index', ['products' => $products, 'categories' => $categories]);
    }
}
