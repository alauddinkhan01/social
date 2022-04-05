<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id'
  ];


    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function orderdetail()
    {
       return $this->hasMany(OrderDetail::class);
    }
     
    public static function getallorder()
    {
       $result = DB::table('orders')
       ->select('id','user_id','total_products','total_price','order_sr')
       ->get()->toArray();
       return $result;
    }
}
