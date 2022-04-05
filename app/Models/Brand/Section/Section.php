<?php

namespace App\Models\Brand\Section;

use App\Models\Brand\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }
}
