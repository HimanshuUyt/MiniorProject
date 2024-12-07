<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use App\Models\Package;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function getCartItem()
    {
        $user = session()->get('user');
        if ($user != null) {
            $total = Cart::where('status', 0)
                ->where('uid', $user->_id)->sum('total');

            $address = $user->address;

            $data = Cart::where('status', 0)
                ->where('uid', $user->_id)->get();
            return view('cart', compact('data','total','address'));
        } else {
            return redirect("login")->withSuccess("Login to continue....");
        }
    }

    public function addtocart($id)
    {
    $user = session()->get('user');

    if ($user !== null) {
        // Check if the product exists
        $product = Package::find($id);

        if (!$product) {
            return back()->withErrors(['Product not found.']);
        }

        // Check if the cart entry already exists
        $cart = Cart::where('status', 0)
            ->where('pid', $id)
            ->where('uid', $user->_id) // Ensure it's for the current user
            ->first();

        if ($cart === null) {
            // Create a new cart entry
            $cart = new Cart();
            $cart->uid = $user->_id;
            $cart->pid = $id;  
            $cart->pname = $product->package_name;
            $cart->ppic = $product->package_pic;
            $cart->price = (int) $product->package_price;
            $cart->username = $user->username;
            $cart->qty = 1;
            $cart->total = (int) $product->package_price;
            $cart->status = 0;
            $cart->date = now(); // Use Carbon for better date handling
            $cart->save();
        } else {
            // Update the existing cart entry
            $cart->qty += 1;
            $cart->total = $cart->qty * $cart->price;
            $cart->save();
        }

        return redirect('cart');

        } 
        else {
        return redirect("login")->withSuccess("Login to continue....");
        }
    }


    public function removeCart($id)
    {
        $cart = Cart::where("_id", $id)->delete();
        return redirect('cart');
    }

    public function orders()
    {
        $data = Cart::where('status', 1)->get();
        return view('order', compact('data'));
    }

    public function confirm(){
        $user=session()->get('user');

        $data=Cart::where('uid',$user->_id)
        ->where('status',0)
        ->get();
        foreach($data as $i){
            $i->status=1;
            $i->save();
        }
        return back()->withSuccess("Order Placed Successfully!!!");
    }
}