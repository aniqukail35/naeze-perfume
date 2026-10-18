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
    session()->save();

    return redirect()->back()->with('success', 'Successfully added ' . $product->name . ' to your cart!');
}

   public function remove($id)
{
    $cart = session()->get('cart');

    if(isset($cart[$id])) {
        $itemName = $cart[$id]['name'];
        unset($cart[$id]);
        session()->put('cart', $cart);
        session()->save();

        return redirect()->route('cart.index');
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
    public function update(Request $request, $id)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {
        $action = $request->input('action');

        if($action === 'increase') {
            $cart[$id]['quantity']++;
        } elseif($action === 'decrease') {
            $cart[$id]['quantity']--;
            // If quantity drops to 0 or below, remove the item entirely
            if($cart[$id]['quantity'] <= 0) {
                unset($cart[$id]);
            }
        }

        session()->put('cart', $cart);
        session()->save();
    }

    return redirect()->route('cart.index');
}
}