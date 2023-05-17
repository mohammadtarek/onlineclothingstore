<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        $request->validate(['email' => 'unique:users,email']);
        if ($request->password == $request->confirmpass) {
            $user = User::create([
                'firstname' => $request->name,
                'address' => $request->address,
                'lasttname' => $request->lastname,
                'dob' => $request->dofbirth,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'gender' => $request->gender,
                'role' => $request->UserType

            ]);
            Auth::login($user);

            $logedUser = Auth::user();
            if ($logedUser->role == 'admin') {
                return redirect(url('/adminpanel'));
            }
            if ($logedUser->role == 'client' || $logedUser->role == 'supplier') {
                return redirect(url('/home'));
            }
        } else {
            return redirect(url('/register'))->with('error_msg', 'Error: Can not register Data not valid !');
        }
    }



    public function loginform()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $islogin =  Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if (!$islogin) {
            return back()->with('error_msg', 'Wrong Email OR Password');
        } else {

            $logedUser = Auth::user();
            if ($logedUser->role == 'admin') {
                return redirect(url('/adminpanel'));
            }
            if ($logedUser->role == 'client' || $logedUser->role == 'supplier') {
                $products = Product::all();
                return view('home', compact('products'));
            }
        }
    }
    
    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('login')->with('success_msg', 'You have been logged out');
    
}

}
