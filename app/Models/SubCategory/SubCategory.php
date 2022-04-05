<?php

namespace App\Models\SubCategory;

use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    protected $table="sub_categories";
    public function categories()
    {
        return $this->belongsTO(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
