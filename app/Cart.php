<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // public $items;
    // public $totalQty = 0;
    // public $totalPrice = 0;

    private $cart;

    // public function __construct($oldCart){
    // 	if ($oldCart) {
    // 		$this->items = $oldCart->items;
    // 		$this->totalQty = $oldCart->totalQty;
    // 		$this->totalPrice = $oldCart->totalPrice;
    // 	}
    // }

    public function view(){
    	// return session('cart');
    }

    public function add($product, $qty)
    {
    	session([
    		$product => [
                'product'=> $product,
                'qty'=> $qty
            ]
        ]);
    }

    public function edit(){

    }

    public function delete(){

    }
}
