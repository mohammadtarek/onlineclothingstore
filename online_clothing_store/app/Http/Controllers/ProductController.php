<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // public function index(){
        
    //     $products=Product::all();
    //     return view('products.index',['products'=>$products]);
    // }
    
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function userHomePage(){
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function productcontrol()
    {
        return view('productcontrol');
    }
    public function productdelete(Request $request)
    {

     //   $product = Product::where('p_title',)->first();
        $product = Product::where('p_title',$request->productTitle)->first();
        if ($product) {
            $product->delete();

            return redirect()->back()->with('success_msg', 'Product deleted successfully!');
        } else {
            return redirect()->back()->with('error_msg', 'Product not found!');
        }
    }
    public function sellproduct(){
        return view('sellproduct');
    }
    public function add(Request $request){
        $loggeduser = Auth::user()->email;
        // $request->validate(['p_title' => 'unique:products,p_title']);
        // $request->validate([
        //     'p_title' => 'required|unique:products,p_title|exists:products,p_title',
        //     'p_desc' => 'required',
        //     'p_price' => 'required|numeric',
        //     'p_size' => 'required',
        //     'p_quantity' => 'required|numeric',
        //     'p_color' => 'required',
        //     'p_photo' => 'required',
        // ]);
                Product::create([
                'p_title'=>$request->title,
                'p_desc'=>$request->Discription,
                'p_price'=>$request->price,
                'p_size'=>$request->size,
                'p_quantity'=>$request->quantity,
                'user_solid'=>$loggeduser,
                'p_photo'=>$request->imagePath,
                'p_color'=>$request->color
            ]);
            return redirect()->back()->with('success_msg', 'Product Added successfully!');
        
    }
}

