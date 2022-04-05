<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\vendor\VendorController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\Brands\Sections\SectionController;
use App\Http\Controllers\VendorPanel\VendorPanelController;
use App\Http\Controllers\Products\PendingProductsController;
use App\Http\Controllers\Products\Categories\CategoriesController;
use App\Http\Controllers\Products\SubCategories\SubCategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::group(['middleware'=>'auth,role:Admin|Super Admin|Shop']
// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware'=>'admin'],function() {

});
//front end routes
Route::get('/',[FrontendController::class,'allproducts'])->name('landingpage');
Route::get('productdetails/{id}',[FrontendController::class,'productdetails'])->name('productdetails');
// Route::get('getdetails/{id}',FrontendController::class,'getdetails')->name('getdetails');
Route::group(['middleware'=>'auth'],function(){
    Route::post('addtocart',[FrontendController::class,'addtocart'])->name('addtocart');
    Route::get('orderdetail',[FrontendController::class,'orderdetail'])->name('orderdetails');
    Route::get('removeitem/{id}',[FrontendController::class,'removeitem'])->name('removeitem');
    Route::get('userdetails/{id}',[FrontendController::class,'userdetails'])->name('userdetails');
    Route::post('useraddress',[FrontendController::class,'useraddress'])->name('useraddress');
    Route::get('payment',[FrontendController::class,'payment'])->name('payment');
    Route::get('busuccess',[FrontendController::class,'buysuccess'])->name('buysuccess');
});

Route::get('buynow',[OrderController::class,'placeorder'])->name('placeorder');
Route::get('filterorder',[OrderController::class,'filterorder'])->name('filterorder');

Auth::routes();
//group middleware 
Route::group(['middleware'=>'admin'],function() {
    //admin panel Routes
    Route::get('admin',[AdminPanelController::class,"dashboard"])->name('dashboard');
    Route::get('sale',[AdminPanelController::class,"sales"])->name("sales");
    Route::get('order',[AdminPanelController::class,"order"])->name("orders");
    Route::get('order/pending',[AdminPanelController::class,"pendingorder"])->name("pendingorders");
    Route::get('order/delivered',[AdminPanelController::class,"deliveredorder"])->name("deliveredorders");
    Route::get('userorders/{id}',[AdminPanelController::class,"userorders"])->name("userorders");
    Route::get('export-order-details',[AdminPanelController::class,'exportorder'])->name('exportorder');
    Route::get('analytics',[AdminPanelController::class,"analytics"])->name("analytics");
    //category routes
    // Route::get('products',[App\Http\Controllers\Products\ProductsController::class,"products"])->name("products");
    Route::get('categories',[App\Http\Controllers\Products\Categories\CategoriesController::class,"categories"])->name("categories");
    Route::get('newcategory',[App\Http\Controllers\Products\Categories\CategoriesController::class,"newcategory"])->name("addcategory");    
    Route::post('newcategory',[App\Http\Controllers\Products\Categories\CategoriesController::class,"addcategory"])->name("addcategory");    
    Route::get('updatecategory/{id}',[App\Http\Controllers\Products\Categories\CategoriesController::class,"editcategory"])->name("updatecategory");    
    Route::post('updatecategory/{id}',[App\Http\Controllers\Products\Categories\CategoriesController::class,"updatecategory"])->name("updatecategory");    
    Route::get('deletecategory/{id}',[App\Http\Controllers\Products\Categories\CategoriesController::class,"deletecategory"])->name("deletecategory");    
    //sub category routes
    Route::get('subcategories/{id}',[App\Http\Controllers\Products\SubCategories\SubCategoriesController::class,"subcategories"])->name("subcategories");
    Route::get('newsubcategory/add',[App\Http\Controllers\Products\SubCategories\SubCategoriesController::class,"newsubcategory"])->name("addsubcategories");
    Route::post('newsubcategory/add',[App\Http\Controllers\Products\SubCategories\SubCategoriesController::class,"addsubcategory"])->name("addsubcategories");
    Route::get('subcategory/edit/{id}',[App\Http\Controllers\Products\SubCategories\SubCategoriesController::class,"editsubcategory"])->name("editsubcategories");
    Route::post('subcategory/update/{id}',[App\Http\Controllers\Products\SubCategories\SubCategoriesController::class,"updatesubcategory"])->name("updatesubcategories");
    Route::get('subcategory/delete/{id}',[App\Http\Controllers\Products\SubCategories\SubCategoriesController::class,"deletesubcategory"])->name("deletesubcategory");
    // Brands route
    Route::get('allbrands',[App\Http\Controllers\Brands\BrandsController::class,"brands"])->name("brands");
    Route::get('brand/new',[App\Http\Controllers\Brands\BrandsController::class,"newbrand"])->name("newbrand");
    Route::post('brand/add',[App\Http\Controllers\Brands\BrandsController::class,"addbrand"])->name("addbrand");
    Route::get('brand/edit/{id}',[App\Http\Controllers\Brands\BrandsController::class,"editbrand"])->name("editbrand");
    Route::post('brand/update/{id}',[App\Http\Controllers\Brands\BrandsController::class,"updatebrand"])->name("updatebrand");
    Route::get('brand/delete/{id}',[App\Http\Controllers\Brands\BrandsController::class,"deletebrand"])->name("deletebrand");
    // Section routes
    // Route::get('sections/{id}',[App\Http\Controllers\Brands\Sections\SectionController::class,"showsections"])->name("allsections");
    Route::get('sections/{id}',[App\Http\Controllers\Brands\Sections\SectionController::class,"sections"])->name("sections");
    Route::get('sections',[App\Http\Controllers\Brands\Sections\SectionController::class,"newsections"])->name("addsections");
    Route::post('sections/add',[App\Http\Controllers\Brands\Sections\SectionController::class,"addsection"])->name("newsection");
    Route::get('sections/edit/{id}',[App\Http\Controllers\Brands\Sections\SectionController::class,"editsection"])->name("editsection");
    Route::post('sections/update/{id}',[App\Http\Controllers\Brands\Sections\SectionController::class,"updatesection"])->name("updatesection");
    Route::get('sections/delete/{id}',[App\Http\Controllers\Brands\Sections\SectionController::class,"deletesection"])->name("deletesection");

    //accessories routes
    Route::get('accessories',[App\Http\Controllers\Products\Accessories\AccessoriesController::class,"accessories"])->name("accessories");
    //vendor routes
    Route::get('vendors',[App\Http\Controllers\vendor\VendorController::class,"vendors"])->name("vendors");
    Route::get('vendors/create',[App\Http\Controllers\vendor\VendorController::class,"createvendor"])->name("newvendor");
    Route::post('vendors/add',[App\Http\Controllers\vendor\VendorController::class,"addvendor"])->name("addvendor");
    Route::get('vendors/edit/{id}',[App\Http\Controllers\vendor\VendorController::class,"editvendor"])->name("editvendor");
    Route::post('vendors/update/{id}',[App\Http\Controllers\vendor\VendorController::class,"updatevendor"])->name("updatevendor");
    Route::get('vendors/delete/{id}',[App\Http\Controllers\vendor\VendorController::class,"deletevendor"])->name("deletevendor");

    // products routes
    Route::get('product',[App\Http\Controllers\Products\ProductsController::class,"product"])->name("product");
    Route::get('product/add',[App\Http\Controllers\Products\ProductsController::class,"addproduct"])->name("addproduct");
    Route::get('getsubcategories/{categoryId}',[ProductsController::class,'getsubcategories'])->name('getsubcategories');
    Route::post('product/add',[ProductsController::class,'productadded'])->name('productadded');
    Route::get('product/edit/{id}',[ProductsController::class,'editproduct'])->name('editproduct');
    Route::post('product/update/{id}',[ProductsController::class,'updateproduct'])->name('updateproduct');
    Route::get('product/delete/{id}',[ProductsController::class,'deleteproduct'])->name('deleteproduct');
    Route::get('pendingproducts',[ProductsController::class,'pendingproducts'])->name('pendingproducts');
    Route::get('viewpendingproducts/{id}',[PendingProductsController::class,'viewpendingproduct'])->name('viewproduct');
    Route::post('approvedproducts/{id}',[PendingProductsController::class,'approvedproduct'])->name('approvedproduct');
    Route::post('rejectedproducts/{id}',[PendingProductsController::class,'rejectedproduct'])->name('rejectedproduct');

});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    // profile routes
    Route::get('profile/{id}',[ProfileController::class,'viewprofile'])->name('viewprofile');
    Route::get('profile/edit/{id}',[ProfileController::class,'editprofile'])->name('editprofile');
    Route::post('profile/update/{id}',[ProfileController::class,'updateprofile'])->name('updateprofile');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('payviastrip', [StripeController::class, 'paystrip'])->name('strippayment');
    Route::get('stripe', [StripeController::class, 'stripe']);
    Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');    
});
Route::group(['middleware'=>'vendor'],function() {
    //vendor routes
    Route::get('vendorpanel',[VendorPanelController::class,'vendor'])->name('vendorpanel');
    Route::get('orders',[VendorPanelController::class,'orders'])->name('vendorsorders');
    Route::get('sales',[VendorPanelController::class,'sales'])->name('totalsale');
    Route::get('vendorproducts/{id}',[VendorPanelController::class,'products'])->name('vendorproducts');
    Route::get('vendorproducts',[VendorPanelController::class,'addproducts'])->name('addvendorproducts');
    Route::post('vendorproducts/add',[VendorPanelController::class,'vendorproductadded'])->name('addedvendorproducts');
    Route::get('vendorgetsubcategories/{categoryId}',[ProductsController::class,'getsubcategories'])->name('vendorgetsubcategories');
    Route::get('vendorproducts/edit/{id}',[VendorPanelController::class,'editproduct'])->name('editvendorproduct');
    Route::post('vendorproducts/update/{id}',[VendorPanelController::class,'updatevendorproduct'])->name('updatevendorproduct');
    Route::get('vendorproducts/delete/{id}',[VendorPanelController::class,'deletevendorproduct'])->name('deletevendorproduct');

});
