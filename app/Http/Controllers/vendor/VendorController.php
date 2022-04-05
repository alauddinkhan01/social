<?php

namespace App\Http\Controllers\vendor;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Vendors\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class VendorController extends Controller
{
    public function vendors()
    {
        $vendors=Vendor::all();
        return view('vendor.vendors',compact('vendors','vendors'));
    }
    public function createvendor()
    {
        return view('vendor.create');
    }
    public function addvendor(Request $request)
    {
        $this->validate($request, [
            "password" => "confirmed",
            "email"=>"email|unique:users"
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->status=$request->staut;
        $user->role=2;
        $user->save();
        $vendor=new Vendor();
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('vendor',$filename);
        $vendor->image=$filename;
        $vendor->name=$request->name;
        $vendor->nicnumber=$request->nicnumber;
        $vendor->country=$request->country;
        $vendor->provience=$request->provience;
        $vendor->city=$request->city;
        $vendor->user_id=$user->id;
        $vendor->postalcode=$request->postalcode;
        $vendor->email=$request->email;
        $vendor->phonenumber=$request->phonenumber;
        $vendor->businessname=$request->businessname;
        $vendor->businesstype=$request->businesstype;
        $vendor->businessaddress=$request->businessaddress;
        $vendor->status=$request->status;

        $vendor->save();
        return redirect()->route('vendors')->with('addvendor','Vender has been added successfully!');
    }
    public function editvendor($id)
    {
        $vendor=Vendor::find($id);
        return view('vendor.updatevendor',compact('vendor','vendor'));
    }
    public function updatevendor(Request $request,$id)
    {
        $vendor=Vendor::find($id);
        if ($request->file('image')) 
        {
            $destination='vendor/'.$vendor->image;
            if (File::Exists($destination)) 
            {
                File::delete($destination);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('vendor',$filename);
            $vendor->image=$filename;
        }
        $vendor->name=$request->name;
        $vendor->nicnumber=$request->nicnumber;
        $vendor->country=$request->country;
        $vendor->provience=$request->provience;
        $vendor->city=$request->city;
        $vendor->postalcode=$request->postalcode;
        $vendor->email=$request->email;
        $vendor->phonenumber=$request->phonenumber;
        $vendor->businessname=$request->businessname;
        $vendor->businesstype=$request->businesstype;
        $vendor->businessaddress=$request->businessaddress;
        $vendor->status=$request->status;
        $vendor->save();
        return redirect()->route('vendors')->with('updatevendor','Vender has been updated successfully!');
    }
    public function deletevendor($id)
    {
        $vendor=Vendor::find($id);
        $vendor->delete();
        return redirect()->route('vendors')->with('deletevendor','Vender has been deleted successfully!');
    }
}
