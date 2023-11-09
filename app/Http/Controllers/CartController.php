<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\CarParts;
use App\Models\Cart;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    use HttpResponses;
    public function store(Request $request)
    {
        Cart::updateOrInsert(
            ['user_id' => Auth::user()->id, 'part_id' => $request->part_id],
            ['count' => $request->count]
        );

        return redirect()->back()->with('success', '200');
    }


    /**
     * Display the specified resource.
     */
    public function myCart()
    {
        $userId = Auth::user()->id;

        $carts = Cart::where('user_id', $userId)
            ->with('part')
            ->get();
        // return $carts;
        return view('checkout.index', compact('carts'));
    }

    public function updateCartCount(Request $request)
    {
        // return $request;
        $userId = Auth::user()->id;
        $part_id = $request->product_id;
        $count = $request->count;

        $cart = Cart::where('user_id', $userId)->where('part_id', $part_id)->first();
        $cart->count = $count;
        $cart->save();

        $totalPrice = 0;
        foreach (Cart::where('user_id', $userId)->get() as $cartpart) {
            $totalPrice += $cartpart->count * $cartpart->part->price;
        }

        return $totalPrice;
    }

    public function removeCartItem(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->delete();

        $totalPrice = 0;
        foreach (Cart::where('user_id', Auth::user()->id)->get() as $cartpart) {
            $totalPrice += $cartpart->count * $cartpart->part->price;
        }

        return $totalPrice;
    }

    public function addressInfo(Request $request)
    {
        $areas = Area::all();
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $totalPrice = 0;
        foreach (Cart::where('user_id', Auth::user()->id)->get() as $cartpart) {
            $totalPrice += $cartpart->count * $cartpart->part->price;
        }

        $totalPriceAfterDiscount = 0;
        foreach (Cart::where('user_id', Auth::user()->id)->get() as $cartpart) {
            if ($cartpart->count >= $cartpart->part->sale_amount) $totalPriceAfterDiscount += $cartpart->part->price * $cartpart->count * ((100 - $cartpart->part->sale_price) / 100);
            else $totalPriceAfterDiscount += $cartpart->part->price * $cartpart->count;
        }



        return view('checkout.addressInfo', compact('areas', 'carts', 'totalPrice', 'totalPriceAfterDiscount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
