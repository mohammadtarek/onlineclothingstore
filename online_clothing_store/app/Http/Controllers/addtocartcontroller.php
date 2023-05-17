<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addtocartcontroller extends Controller
{
 public function addtocart(){
    
    $loggeduser =Auth::user()->email;
    $products = Product::whereHas('carts', function ($query) use ($loggeduser) {
        $query->where('c_email', $loggeduser);
    })->with('carts')->get();

return view('checkout')->with('products', $products);
   
 }
  public function store(Request $request)
 {
    $loggeduser = Auth::user()->email;
   $product_title= $request->addcart;
   $cart = Cart::create([
    'p_title' => $request->addcart,
    'c_email'=>$loggeduser
]);

    $loggeduser =Auth::user()->email;
    $products = Product::whereHas('carts', function ($query) use ($loggeduser) {
        $query->where('c_email', $loggeduser);
    })->with('carts')->get();
    
    return view('checkout')->with('products', $products);
 }
 public function checkout(){
    $loggeduser=Auth::user()->email;
    Cart::where('c_email', $loggeduser)->delete();
    $loggeduser =Auth::user()->email;
    $products = Product::whereHas('carts', function ($query) use ($loggeduser) {
        $query->where('c_email', $loggeduser);
    })->with('carts')->get();

return view('checkout')->with('products', $products);
    
 }
}
