<?php

namespace App\Http\Controllers\Products;

use App\Models\Category;
use App\Models\Brand\Brand;
use Illuminate\Http\Request;
use App\Models\Vendors\Vendor;
use App\Models\Products\Product;
use App\Http\Controllers\Controller;
use App\Mail\AddProductMail;
use App\Mail\UpdateProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\SubCategory\SubCategory;
use Illuminate\Support\Facades\Mail;

class ProductsController extends Controller
{
    public function product()
    {
        $products=Product::all();
        return view('product.products',compact('products','products'));
    }
    public function addproduct()
    {
        $categories = Category::all();
        $vendors=Vendor::all();
        $brands = Brand::all();
        return view('product.addproduct',compact(['categories','brands','vendors']));
    }
    public function getsubcategories($categoryId)
    {
        $subcategories = SubCategory::where('category_id',$categoryId)->get();
        return $subcategories;
    }
    public function productadded(Request $request)
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
        // Mail::to('ever101shinestar@gmail.com')->send(new AddProductMail($product));
        return redirect()->route('product')->with('add','Product added successfully!');
    }
    public function editproduct($id)
    {
        $product=Product::find($id);
        $categories = Category::all();
        $subcategories=SubCategory::all();
        $vendors=Vendor::all();
        $brands = Brand::all();
        return view('product.updateproduct',compact(['product','categories','vendors','brands','subcategories']));
    }
    public function updateproduct(Request $request,$id)
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
        $product->vendor_id=$request->vendor_id;
        $product->quantity=$request->quantity;
        $product->unitprice=$request->unitprice;
        $product->discount=$request->discount;
        $product->color=$request->color;
        $product->description=$request->description;
        $product->brand_id=$request->brand_id;
        $product->status=$request->status;
        $product->save();
        // Mail::to('ever101shinestar@gmail.com')->send(new UpdateProduct($product));
        return redirect()->route('product')->with('update','Product updated successfully!');
    }
    public function deleteproduct($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('product')->with('delete','Product deleted successfully!');
    }
    public function pendingproducts()
    {
        $products=Product::where('status','inactive')->get();
        return view('adminpanel.pendingproducts',compact('products','products'));
    }
    // public function allproducts()
    // // {
    // //     $products=Product::all();
    // //     return view('welcome',compact('products','products'));
    // // }
}
