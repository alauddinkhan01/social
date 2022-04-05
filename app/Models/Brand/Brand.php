<?php

namespace App\Models\Brand;

use App\Models\Products\Product;
use App\Models\Brand\Section\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
