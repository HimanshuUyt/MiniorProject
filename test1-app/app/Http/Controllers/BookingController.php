<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function index(){
        $data = Booking::where('status','1')->latest()->get();
        return view('order',compact($data));
    }

    public function addtocart($id) {
        $user=session()->get('user');
        if($user!=null){
            $product=Package::where('_id',$id)->first();
            $cart=Booking::where('uid',$user->_id)
                        ->where('pid',$product->_id)
                        ->where('status',0)->first();

                        if($cart==null){
                            $c=new Booking();
                            $c->pid=$product->_id;
                            $c->uid=$user->_id;
                            $c->username=$user->username;
                            $c->pname=$product->product_name;
                            $c->ppic=$product->product_pic;
                            $c->price=(int)$product->product_price;
                            
                            $c->total=(int)$product->product_price;
                            $c->status=0;
                            $c->date=date("mm:dd:yyyy");
                            $c->save();
                        }
                        return back()->withSuccess("Added to Cart");


        }else{
            return redirect("/login")->withSuccess("Please login to continue...");
        }
        
    }
}
