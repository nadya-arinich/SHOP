<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class BasketController extends Controller
{
    public function getIndex()
    {
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
        return view('basket', compact('products', 'sum'));
    }
    public function postOder(Request $request){
        //dd($request->email, $request->phone);
        $basket = '';
        if (isset($_COOKIE['basket'])) {
            $basket = $_COOKIE['basket'];
        }

        $order = new Order;
        $order->user_id = (Auth::guest())?0:Auth::user()->id;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->adress = $request->adress;
        $order->status = 'new';
        $order->data = $basket;
        $order->save();
        setcookie("basket",'',time()-1, '/');
        return redirect()->back();
    }
    public function getDelete($id = null){
        $basket_new = ',';
        if (isset($_COOKIE['basket'])) {
            $basket = $_COOKIE['basket'];
            $basket_arr = explode(',', $basket);
            
            foreach($basket_arr as $one){
                if(isset($one[0])){
                $value = explode(':', $one);

                if($value[0] != $id){
                    echo $value[0];
                    echo  '-';
                    echo $value[1];
                    echo '<br />';
                    $basket_new.=$value[0].':'.$value[1].',';
                }
                }
            }

            unset($_COOKIE['basket']);
            setcookie('basket', '', time()-1, '/');
            setcookie('basket', $basket_new, time()+3600, '/');
            //dd($basket_new, $_COOKIE['basket']);

        }
        return redirect()->back();
    }
}
