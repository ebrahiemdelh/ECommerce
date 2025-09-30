<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Services\Front\CartServices;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $cart_id;
    public function __construct()  {
        $this->cart_id = session()->get('cart_id');
    }

    public function store(string $id,Request $request) {
        CartServices::addOrUpdateCartItem( $id, $request->quantity);
        Flasher::info('Product added to cart successfully');
        return redirect()->back();
    }
}
