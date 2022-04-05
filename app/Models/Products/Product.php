<?php

namespace App\Models\Products;

use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand\Brand;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Vendors\Vendor;
use App\Models\SubCategory\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class); 
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class); 
    }
    public function subcategories()
    {
        return $this->belongsTo(SubCategory::class); 
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class); 
    }
    public function users()
    {
        return $this->belongsTo(User::class); 
    } 
    public function cart()
    {
        return $this->hasMany(Cart::class); 
    } 
    public function order()
    {
        return $this->hasMany(Order::class); 
    } 
    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class);
    } 
}
