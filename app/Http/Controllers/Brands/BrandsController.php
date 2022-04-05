<?php

namespace App\Http\Controllers\Brands;

use App\Models\Brand\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\BrandMail;
use App\Mail\UpdateBrand;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class BrandsController extends Controller
{
    public function brands()
    {
        $brands=Brand::all();
        return view('brands.brands',compact('brands','brands'));
    }
    public function newbrand()
    {
        return view('brands.addbrand');
    }
    public function addbrand(Request $request)
    {
        // dd('hello');
        $brand=new Brand();
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('brands',$filename);
        $brand->image=$filename;
        $brand->brand=$request->brand;
        $brand->status=$request->status;
        $brand->save();
        // Mail::to('ever101shinestar@gmail.com')->send(new BrandMail($brand));
        return redirect()->route('brands')->with('addbrand','Brand added successfully!');
    }
    public function editbrand($id)
    {
        $brand=Brand::find($id);
        return view('brands.updatebrand',compact('brand','brand'));
    }
    public function updatebrand(Request $request,$id)
    {
        $brand=Brand::find($id);
        if ($request->file('image')) 
        {
            $destination='brands/'.$brand->image;
            if (File::Exists($destination)) 
            {
                File::delete($destination);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('brands',$filename);
            $brand->image=$filename;
        }
        $brand->brand=$request->brand;
        $brand->status=$request->status;
        $brand->save();
        // Mail::to('ever101shinestar@gmail.com')->send(new UpdateBrand($brand));
        return redirect()->route('brands')->with('updatebrand','Brand updatec successfully!');
    }
    public function deletebrand($id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        return redirect()->route('brands')->with('delete','Brand deleted successfully!');
    }
}
