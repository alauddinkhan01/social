<?php

namespace App\Http\Controllers\VendorPanel;

use App\Models\Category;
use App\Models\Brand\Brand;
use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Http\Controllers\Controller;
use App\Mail\AddVendorProduct;
use App\Mail\VendorUpdateProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\SubCategory\SubCategory;
use Illuminate\Support\Facades\Mail;

class VendorPanelController extends Controller
{
    public function vendor()
    {
        return view('vendorpanel.dashboard');
    }
    public function orders()
    {
        return view('vendorpanel.orders.orders');
    }
    public function products($id)
    {
        $products=Product::where('vendor_id',$id)->get();
        return view('vendorpanel.products.products',compact('products','products')); 
    }
    public function addproducts()
    {
        $categories=Category::all();
        $brands=Brand::all();

        return view('vendorpanel.products.addproduct',compact('categories','brands'));
    }
    public function vendorproductadded(Request $request)
    {
        // dd($request);
        $product = new Product();
        $product->productname=$request->procuctname;
        $product->category_id=$request->category_id;
        $product->sub_category_id=$request->subcategory_id;
        $product->vendor_id=$request->vendor_id;
        $product->quantity=$request->quantity;
        $product->unitprice=$request->unitprice;
        $product->discount=$request->discount;
        $product->color=$request->color;
        $product->description=$request->description;
        $product->brand_id=$request->brand_id;
        $product->status=$request->status;
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('products',$filename);
        $product->image=$filename;
        $product->save();
        Mail::to('ever101shinestar@gmail.com')->send(new AddVendorProduct($product));
        return redirect()->route('vendorpanel')->with('add','Product added successfully!');
    }
    public function editproduct($id)
    {
        $product=Product::find($id);
        $categories = Category::all();
        $subcategories=SubCategory::all();
        $brands = Brand::all();
        return view('vendorpanel.products.editvendorproduct',compact(['product','categories','brands','subcategories']));
    }
    public function updatevendorproduct(Request $request,$id)
    {
        // dd($request);
        $product =  Product::find($id);
        if ($request->file('image')) 
        {
            $destination='products/'.$product->image;
            if (File::Exists($destination)) 
            {
                File::delete($destination);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('products',$filename);
            $product->image=$filename;
        }
        $product->productname=$request->procuctname;
        $product->category_id=$request->category_id;
        $product->sub_category_id=$request->subcategory_id;
        // $product->vendor_id=$request->vendor_id;
        $product->quantity=$request->quantity;
        $product->unitprice=$request->unitprice;
        $product->discount=$request->discount;
        $product->color=$request->color;
        $product->description=$request->description;
        $product->brand_id=$request->brand_id;
        $product->status=$request->status;
        $product->save();
        Mail::to('ever101shinestar@gmail.com')->send(new VendorUpdateProduct($product));
        return redirect()->route('vendorpanel')->with('update','Product updated successfully!');
    }
    public function deletevendorproduct($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back()->with('delete','Product deleted successfully!');
    }
}
