<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\Product;
use App\Repositories\Cart\CartModelRepository;
use App\Repositories\Cart\CartRepository;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    protected $cart;
    public function __construct(CartRepository $cart)
    {
        $this->cart = $cart;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.pages.cart', ['cart' => $this->cart]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CartRequest $request)
    {
        $valid = $request->validated();
        $product = Product::findOrFail($valid["product_id"]);
        $this->cart->add($product, $valid->quantity ?? 1);
        Flasher::info('Product added to cart successfully');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CartRequest $request)
    {
        $valid = $request->validated();
        $product = Product::findOrFail($valid->product_id);
        $this->cart->update($product, $valid->quantity);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->cart->delete($id);
    }
}
