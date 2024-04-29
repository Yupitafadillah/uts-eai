<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{
    public function cart(){
        return view('cart');
    }

    // public function index()
    // {
    // // Logic untuk menampilkan isi keranjang
    //     $cartItems = array[
    //         {"product_id": 1, "name":"Bacon, Egg & Cheese Biscuit", "price":"3.23", "img":"https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Bacon-Egg-Cheese-Biscuit-Regular-Size-Biscuit-1:1-4-product-tile-desktop"},
    //         {"product_id": 2, "name":"Egg McMuffin", "price":"5", "img":"https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Egg-McMuffin-1:1-4-product-tile-desktop"},
    //         {"product_id": 3, "name":"Sausage McMuffin", "price":"12", "img": "https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Sausage-McMuffin:1-4-product-tile-desktop"},
    //         {"product_id": 4, "name":"Sausage Biscuit", "price":"12", "img": "https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Sausage-Biscuit-Regular-Size-Biscuit-1:1-4-product-tile-desktop"},
    //         {"product_id": 5, "name":"Crispy Chicken Sandwich", "price":"8", "img": "https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-crispy-chicken-sandwich:1-4-product-tile-desktop"},
    //         {"product_id": 6, "name":"Deluxe Crispy Chicken Sandwich", "price":"10", "img": "https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-deluxe-crispy-chicken-sandwich:1-4-product-tile-desktop"}
    //     ]

    //     // Pass cart items to the view
    //     return view('cart.index', compact('cartItems'));
    //     }

    // public function add(Request $request)
    //     {
    //     // Logic untuk menambahkan item ke keranjang
    //     return redirect()->route('cart.index');
    //     }

    // public function remove(Request $request)
    //     {
    //     // Logic untuk menghapus item dari keranjang
    //     return redirect()->route('cart.index');
    //     }
    // }

    // private $cart_items = [
    //     ["user_id" => 1, "burger_id" => 1, "quantity" => 2],
    //     ["user_id" => 2, "burger_id" => 2, "quantity" => 1],
    //     ["user_id" => 1, "burger_id" => 1, "quantity" => 1],
    //     ["user_id" => 3, "burger_id" => 3, "quantity" => 3],
    // ];
    
    //     // return view('cart', ['cart_items' => $cart_items]);
    //     // }

    // }

    // function getCart(){
    //     return response()->json($this->cart_items);
    // }
    

    // function getTotalQuantity($burger_id){
    //     $total_quantity = array_reduce($this->cart_items, function($carry, $item) use($burger_id){
    //         if($burger_id == $item['burger_id']){
    //             $carry += $item['quantity'];
    //         }
    //         return $carry;
    //     }, 0);

    //     return response()->json(
    //         [
    //             'burger_id'=> $burger_id, 
    //             'total_quantity' => $total_quantity
    //         ]
    //     );
    // }
    }