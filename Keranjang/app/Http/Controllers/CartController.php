<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{

    // public function index()
    //     {
    //         // Logic untuk menampilkan isi keranjang
    //     $cartItems = session()->has('cart') ? session('cart') : [];

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

    private $cart_items = [
        ["user_id" => 1, "burger_id" => 1, "quantity" => 2],
        ["user_id" => 2, "burger_id" => 2, "quantity" => 1],
        ["user_id" => 1, "burger_id" => 1, "quantity" => 1],
        ["user_id" => 3, "burger_id" => 3, "quantity" => 3],
    ];
    
        // return view('cart', ['cart_items' => $cart_items]);
        // }

    }

    function getCart(){
        return response()->json($this->cart_items);
    }
    

    function getTotalQuantity($burger_id){
        $total_quantity = array_reduce($this->cart_items, function($carry, $item) use($burger_id){
            if($burger_id == $item['burger_id']){
                $carry += $item['quantity'];
            }
            return $carry;
        }, 0);

        return response()->json(
            [
                'burger_id'=> $burger_id, 
                'total_quantity' => $total_quantity
            ]
        );
    }
