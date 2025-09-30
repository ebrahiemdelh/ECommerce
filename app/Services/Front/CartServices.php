<?php

namespace App\Services\Front;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartServices
{
    protected $cart;
    public function __construct()
    {
        $this->cart = self::getOrCreateCart();
    }
    public static function getOrCreateCart() {
        $cart_id = session()->get('cart_id');
        if(!$cart_id){
            $cart = Cart::create(
                [
                    'user_id' => Auth::id() ?? 1,
                ]
            );
            session()->put('cart_id',$cart->id);
            return $cart;
        }else{
            return Cart::find($cart_id);
        }
    }

    public static function addOrUpdateCartItem($product_id, $quantity = 1) {
        $cart=CartServices::getOrCreateCart();
        $cart_item = $cart->cartItems()->where('product_id', $product_id)->first();
        if($cart_item) {
            $cart_item->quantity += $quantity;
            $cart_item->save();
        } else {
            $cart->cartItems()->create([
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
        }
        return $cart->load('cartItems.product');
    }

    public function getCartItems() {
        return $this->cart->load('cartItems.product');
    }
}
