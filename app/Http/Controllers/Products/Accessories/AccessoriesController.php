<?php

namespace App\Http\Controllers\Products\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function accessories()
    {
        return view('products.accessories');
    }
}
