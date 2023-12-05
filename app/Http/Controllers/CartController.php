<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart($menu, $user)
    {
        $cart = Cart::where('user_id', $user)->where('menu_id', $menu)->first();
        if ($cart) {
            $cart->increment('quantity');
        } else {
            Cart::create([
                'user_id' => $user,
                'menu_id' => $menu,
                'quantity' => 1,
            ]);
        }

        return back()->with('success','item added to cart');
    }
}
