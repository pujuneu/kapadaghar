<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Retrieve all cart items
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        return view('viewcart', compact('carts'));
    }

    public function store(Request $request)
    {
        // Check if the cart item already exists for the user and product
        $existingCart = Cart::where('user_id', auth()->user()->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($existingCart) {
            // Update the quantity if the cart item already exists
            $existingCart->quantity += $request->quantity;
            $existingCart->save();
        } else {
            // Create a new cart item if it doesn't exist
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $request->product_id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        return redirect()->back();
    }

    public function update(Request $request, Cart $cart)
    {
        // Update the cart item
        $cart->quantity = $request->input('quantity');
        $cart->save();

        return redirect()->route('carts.index');
    }

    public function destroy(Cart $cart)
    {
        // Delete the cart item
        $cart->delete();

        return redirect()->route('carts.index');
    }
}
