<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\StripeController;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function placeorder()
    {
        // dd($request);
        // $strips = new StripeController();
        // $strips->stripePost($request->stripetoken);
        $totalproducts = 0;
        $totalprice = 0;
        $cartitems = Cart::where('user_id',Auth::user()->id)->get();
        foreach ($cartitems as $item) 
        {
            $totalproducts += $item->quantity;
            $totalprice += $item->product->unitprice;
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->total_products = $totalproducts;
        $order->total_price = $totalprice;
        $order->status = 'Pending';
        $order->order_sr = 'WS'.rand(1111,9999);
        $order->save();
        
        $cartitems = Cart::where('user_id',Auth::user()->id)->get();
        foreach ($cartitems as $item) 
        {
            $orderdetails = new OrderDetail();
            $orderdetails->order_id = $order->id;
            $orderdetails->product_id = $item->product->id;
            $orderdetails->quantity = $item->quantity;
            $orderdetails->product_price = $item->product->unitprice;
            $orderdetails->total_price = $item->quantity*$item->product->unitprice;
            $orderdetails->save();
        }

        // $cartitems = Cart::where('user_id',Auth::user()->id)->get();
        // $cartitems->delete();
        $id = Auth::user()->id;
        $cart = Cart::where('user_id',$id);
        $cart->delete();
        return redirect()->route('buysuccess')->with('buy','The Order has placed successfully!');
    }

    public function filterorder(Request $request)
    {
        // dd($request);
        $request->flash();
        $orders = Order::when(!empty($request->order_sr), function($q) use($request) {
            $q->where('order_sr', 'Like', '%'. $request->order_sr. '%');
        })->get();

        return view('adminpanel.order', compact('orders'));
    }
}