<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Repositories\Cart\CartRepository;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CartRepository $cart)
    {
        $user = Auth::user();
        return view('front.pages.checkout',compact('user','cart'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CartRepository $cart)
    {
        $items = $cart->get();
        DB::beginTransaction();
        try {
        $order = Order::create([
            'user_id' => Auth::id(),
            'status' => 'pending',
            'total_amount' => $cart->total(),
        ]);
        $order->orderItems()->createMany(
            $items->map(function ($item) {
                return [
                    'product_id' => $item->product->id,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                ];
            })->toArray()
        );
        DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Flasher::error('There was an error processing your order. Please try again.');
            return redirect()->back();
        }
        Flasher::success('Order placed successfully');
        $cart->empty();
        return redirect()->route('front.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
