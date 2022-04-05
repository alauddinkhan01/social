<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
// use Dotenv\Validator;

class UserDetailAPI extends Controller
{

    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
        return response($response, 201);
    }

    public function userinfo()
    {
        $user = User::find(request()->user()->id);
        return $user->email;
    }

    // public function getdata()
    // {
    //     $data = UserDetail::all();
    //     return $data;
    // }

    // public function getspecificdata($id)
    // {
    //     $data = UserDetail::find($id);
    //     return $data;
    // }

    //standrad way of getting data via API's
    public function getspecificdata($id=null)
    {
        $data = $id?UserDetail::find($id):UserDetail::all();
        return $data;
    }

    public function add(Request $request)
    {
        $data = new UserDetail;
        $data->user_id = $request->user_id;
        $data->phonenumber = $request->phonenumber;
        $data->country = $request->country;
        $data->provience = $request->provience;
        $data->district = $request->district;
        $data->city = $request->city;
        $data->town = $request->town;
        $data->zipcode = $request->zipcode;
        $data->address1 = $request->address1;
        $data->address2 = $request->address2;
        $result = $data->save();
        if ($result) {
            
            return "details added successfylly";
        }else {
            return "operation failed";
        }

    }

    public function update(Request $request)
    {
        $data = UserDetail::find($request->id);
        $data->country = $request->country;
        $data->provience = $request->provience;
        $result = $data->save();
        if ($result) {
            
            return "data updated successfully!";
        }else{
            return "Operation Failed!";
        }
    }

    public function search($country)
    {
        $data = UserDetail::where('country',"like","%".$country."%")->get();
        return $data;
    }

    public function delete($id)
    {
        $data = UserDetail::find($id);
        $result = $data->delete();
        if ($result) {
            return "data deleted successfully!";
        }else {
            return "Operation Failed!";
        }
        
    }

    public function validatedata(Request $request)
    {
        $rules = array(
            "user_id"=>"required",
            "country"=>"required|max:6|min:2",
            "provience"=>"required|max:8|min:3",
        );
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return $validator->errors();
        }else {
            $data = new UserDetail;
            $data->user_id = $request->user_id;
            $data->phonenumber = $request->phonenumber;
            $data->country = $request->country;
            $data->provience = $request->provience;
            $data->district = $request->district;
            $data->city = $request->city;
            $data->town = $request->town;
            $data->zipcode = $request->zipcode;
            $data->address1 = $request->address1;
            $data->address2 = $request->address2;
            $data->save();
            return "data is valid";
        }
    }


}
