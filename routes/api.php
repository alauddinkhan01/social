<?php

use App\Http\Controllers\API\UserDetailAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get('search/{country}',[UserDetailAPI::class,'search']);
    Route::get('userinfo',[UserDetailAPI::class,'userinfo']);

    });
 
// Route::get('userdetails',[UserDetailAPI::class,'getdata']);
//parametarise get api data
// Route::get('userdetails/{id}',[UserDetailAPI::class,'getspecificdata']);
Route::get('userdetails/{id?}',[UserDetailAPI::class,'getspecificdata']);

Route::post('add',[UserDetailAPI::class,'add']);

Route::put('update',[UserDetailAPI::class,'update']);


Route::delete('delete/{id}',[UserDetailAPI::class,'delete']);

Route::post('validation',[UserDetailAPI::class,'validatedata']);

Route::post("login",[UserDetailAPI::class,'index']);
