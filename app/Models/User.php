<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Order;
use App\Models\UserDetail;
use App\Models\Vendors\Vendor;
use App\Models\Products\Product;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function userdetail()
    {
        return $this->hasOne(UserDetail::class);
    } 
    public function order()
    {
        return $this->hasMany(Order::class);
    } 
}