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
        $user = Auth::user();
        Profile::updateOrCreate(
            ['user_id' => $user->id],
            ['about' => $request->about]
        );
        if($request->hasFile('picture')){
            $user->addMedia($request->picture)->toMediaCollection();
        }

        // return redirect()->back();

        $basket = '';
        if (isset($_COOKIE['basket'])) {
            $basket = $_COOKIE['basket'];
        }

        $basket_arr = explode(',', $basket);
        $products = [];
        $sum = 0;
        foreach ($basket_arr as $key => $value) {
            if ($value != '') {
                $value_arr = explode(':', $value);
                $product = Product::find($value_arr[0]);
                $products[] = $product;
                $sum+=$product->price;
            }
        }
        return redirect()->back();
        
    }
       
        
}

