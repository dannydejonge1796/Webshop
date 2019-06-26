<?php

namespace App\Http\Controllers;

use App\Order;
use App\Category;
use App\Cart;
use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        $orders = json_decode(Order::all('product_id')[0]);

      

        var_dump($orders);

        exit();

        return view('order.index', ['categories' => $categories, 'orders' => $orders]);
    }

    public function addOrder(Request $request)
    {

        if (empty(Session::get('cart')->items)) {
            return redirect()->back();
        }

        $user = auth()->user();

        $order = new Order([
            'number' => 1,
            'user_id'=> $user->id,
            'product_id'=> json_encode(Session::get('cart'))
        ]);

        $order->save();

        session()->put('cart', null);

        return redirect()->route('orders');
    }
}
