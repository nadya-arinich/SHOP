<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Auth;

class HomeController extends Controller
{
    public function getIndex(){
        return view('dashboard');

    }
    public function postIndex(Request $request){
        $user = Auth::user()->id;
        $basket = '';
        if (isset($_COOKIE['basket'])) {
            $basket = $_COOKIE['basket'];
        }

        $basket_arr = explode(',', $basket);
        $products = [];
        $sum = 0;
        $name = $product->name;
        $price = $product->price;
        foreach ($basket_arr as $key => $value) {
            if ($value != '') {
                $value_arr = explode(':', $value);
                $product = Product::find($value_arr[0]);
                $products[] = $product;
                
                $sum+=$product->price;
            }
        }
        
        unset($_COOKIE['basket']);
        setcookie("basket",'',time()-1, '/');
        return redirect()->back();

        // return redirect()->back();

        
        
    }
       
        
}

