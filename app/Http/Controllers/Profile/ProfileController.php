<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function viewprofile($id)
    {
        $profile=User::find($id);
        return view('profile.viewprofile',compact('profile','profile'));
    }
    public function editprofile($id)
    {
        $profile=User::find($id);
        return view('profile.editprofile',compact('profile','profile'));
    }
    public function updateprofile(Request $request,$id)
    {
        // dd($request);
        $update=User::find($id);
        if ($request->file('image')) 
        {
            $destination='users/'.$update->image;
            if (File::Exists($destination)) 
            {
                File::delete($destination);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('users',$filename);
            $update->image=$filename;
        }
        $update->status=$request->status;
        $update->name=$request->name;
        $update->email=$request->email;
        $update->save();
        return redirect()->back()->with('updateprofile','Profile updated successfully!');
    }
}
