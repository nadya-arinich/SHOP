<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($id) {
        $item = Product::where('id',$id)->first();

        return view ()
    }
}
