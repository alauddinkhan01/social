<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Http\Controllers\Controller;

class PendingProductsController extends Controller
{
    public function viewpendingproduct($id)
    {
        $product=Product::find($id);
        return view('pendingproducts.viewproduct',compact('product','product'));
    }
    public function approvedproduct(Request $request,$id)
    {
        // dd($request);
        $product = Product::find($id);
        $product->status = $request->status;
        $product->save();
        return redirect()->route('pendingproducts')->with('productapproved','The vendor product approved successfully!');

    }
    public function sales()
    {
        return view('');
    }
    public function rejectedproduct(Request $request,$id)
    {
        // dd($request);
        $product = Product::find($id);
        $product->status = $request->status;
        $product->save();
        return redirect()->route('pendingproducts')->with('productrejected','The vendor product rejected successfully!');

    }
}
