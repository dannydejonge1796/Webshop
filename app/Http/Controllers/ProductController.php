<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $id = $request->get('id');
        
        $products = Product::all();
        if($id !== null){
            $products = DB::table('products')->where('id', $id);
        }
        
        return view('products.index', ['products' => $products]);
    }
}
