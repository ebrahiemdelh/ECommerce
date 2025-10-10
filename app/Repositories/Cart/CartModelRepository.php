<?php

namespace App\Repositories\Cart;

use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CartModelRepository implements CartRepository
{
    public function get(): Collection
    {
        return Cart::with('product')->where('cookie_id', $this->getCookieId())->get();
    }

    public function add(Product $product, $quantity = 1)
    {
        $item = Cart::where('cookie_id', $this->getCookieId())
            ->where('product_id', $product->id)
            ->first();
        if ($item) {
            $item->quantity += $quantity;
            $item->save();
            return $item;
        }
        return Cart::create([
            'cookie_id' => $this->getCookieId(),
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => $quantity,
        ]);
    }

    public function update(Product $product, $quantity)
    {
        Cart::
        where('cookie_id', $this->getCookieId())
        ->where('product_id', $product->id)
        ->update([
            'quantity' => $quantity,
        ]);
    }

    public function delete($id)
    {
        return Cart::
        where('cookie_id', $this->getCookieId())
        ->where('product_id', $id)
        ->delete();
    }

    public function empty()
    {
        Cart::where('cookie_id', $this->getCookieId())->delete();
    }

    public function total(): float
    {
        return (float) Cart::where('cookie_id', $this->getCookieId())
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->selectRaw('SUM(products.price * carts.quantity) as total')
        ->value('total') ?? 0;
    }
    public function saved(): float
    {
        return (float) Cart::where('cookie_id', $this->getCookieId())
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->selectRaw('SUM((products.price - products.discount_price) * carts.quantity) as total')
        ->value('total') ?? 0;
    }

    public function getCookieId()
    {
        $cookie_id = Cookie::get('cart_id');
        if (!$cookie_id) {
            $cookie_id= Str::uuid();
            Cookie::queue('cart_id', $cookie_id, 30*24*60);
        }
        return $cookie_id;
    }
}
