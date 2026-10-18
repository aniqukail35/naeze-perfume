<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        // If item already exists in cart, increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1,
                "gender_category" => $product->gender_category
            ];
        }

        session()->put('cart', $cart);
        session()->save(); // Ensures session data writes immediately

        return redirect()->back();
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            session()->save();
        }

        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        // Require user login before placing an order
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login to complete your purchase.');
        }

        // Clear the session cart upon successful checkout
        session()->forget('cart');
        return view('cart.success');
    }
}