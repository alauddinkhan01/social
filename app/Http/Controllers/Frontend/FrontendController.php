<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function allproducts()
    {
        $products=Product::all();
        $newarrival=Product::all();
        $browseproducts=Product::all();
        $bestselling=Product::all();
        $featureproducts=Product::all();
        $newproducts=Product::all();
        $discountproducts=Product::all();
        return view('welcome',compact(['discountproducts','newproducts','featureproducts','products','newarrival','browseproducts','bestselling']));
    }

    public function getdetails($id)
    {
        $details = Product::find($id);
        return view('welcome',compact('details'));
    }
    public function productdetails($id)
    {
        $product=Product::find($id);
        $products=Product::all();
        return view('frontend.productdetails',compact(['product','products']));
    }
    public function addtocart(Request $request)
    {
        // dd($request);
        $addtocart=new Cart();
        $addtocart->product_id=$request->product_id;
        $addtocart->vendor_id=$request->vendor_id;
        $addtocart->user_id= Auth::user()->id;;
        $addtocart->quantity=$request->quantity;
        $addtocart->save();
        return redirect()->route('landingpage')->with('addtocart','this product added to cart ');
    }
    public function orderdetail()
    {
        $id=Auth::user()->id;
        $cart=Cart::where('user_id',$id)->get();
        $pricing=$cart;
        return view('frontend.orderdetail',compact(['cart','pricing']));
    }
    public function removeitem($id)
    {
        $item=Cart::find($id);
        $item->delete();
        return back()->with('removeitem','item removed successfully');
    }
    public function userdetails($id)
    {
        $user=User::find($id);
        return view('frontend.details',compact('user','user'));
    }
    public function useraddress(Request $request)
    {
        // dd($request);

        if (!Auth::user()->userdetail()->exists()) {
            $address=new UserDetail(); 
            $address->user_id=$request->user_id;
            $address->phonenumber=$request->phonenumber;
            $address->country=$request->country;
            $address->provience=$request->provience;
            $address->city=$request->city;
            $address->district=$request->district;
            $address->town=$request->town;
            $address->zipcode=$request->zipcode;
            $address->address1=$request->address1;
            $address->address2=$request->address2;
            $address->save();
        }
        else
        {
            // dd($request);
            $userid = Auth::user()->id; 
            $userdetail = UserDetail::where('user_id',$userid)->first();
            $userdetail->user_id=$request->user_id;
            $userdetail->phonenumber=$request->phonenumber;
            $userdetail->country=$request->country;
            $userdetail->provience=$request->provience;
            $userdetail->city=$request->city;
            $userdetail->district=$request->district;
            $userdetail->town=$request->town;
            $userdetail->zipcode=$request->zipcode;
            $userdetail->address1=$request->address1;
            $userdetail->address2=$request->address2;
            $userdetail->save();
        }

        return redirect()->route('payment');
    }
    public function payment()
    {
        $id=Auth::user()->id;
        $cart=Cart::where('user_id',$id)->get();
        $order=$cart;
        $pay=$cart;
        return view('frontend.payment',compact(['cart','order','pay']));
    }
    public function buysuccess()
    {
        $tracking = Order::where('user_id',Auth::user()->id)->first();
        return view('frontend.buysuccess', compact('tracking'));
    }
}
