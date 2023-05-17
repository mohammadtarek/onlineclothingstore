<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminpanel()
    {
        return view('adminpanel');
    }
    public function create()
    {
        return view('adduser');
    }
    public function store(Request $request)
    {
        $loggedAdmin = Auth::user()->email;
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
                'role' => $request->UserType,
                'a_adminadded' => $loggedAdmin,
            ]);
            return redirect(url('/adduser'));
        } else {
            return redirect(url('/adduser'))->with('error_msg', 'Error: Can not Add user: Data not valid !');
        }
    }
    public function blockuser()
    {
        return view('blockuser');
    }
    public function block(Request $request)
    {

        $user = User::where('email',  $request->email)->get();

        if ($user === null) {
            return redirect()->back()->with('error_msg', 'No User Found!');
        } else {
            foreach ($user as $oneuser) {
                $role = $oneuser->role;
            }
            if ($request->UserType == $role) {

                $user = User::where('email',  $request->input('email'))->first();
                if ($user) {
                    if ($user->isblocked == 1) {
                        return redirect()->back()->with('error_msg', 'User Is Already Blocked');
                    } else {
                        $user->isblocked = 1;
                        $user->save();
                        return redirect()->back()->with('success', 'User blocked successfully.');
                    }
                } else {
                    return redirect()->back()->with('error_msg', 'User not found.');
                }
            } else {
                return redirect()->back()->with('error_msg', 'No Such User With this Role');
            }
        }
    }
   public function deleteuser(){
return view('deleteuser');
   }
   public function delete(Request $request){
    // $user = User::where('email',$request->email)->first();
    // if ($user) {
    //     $user->delete();

    //     return redirect()->back()->with('success_msg', 'User Account deleted successfully!');
    // } else {
    //     return redirect()->back()->with('error_msg', 'Email not found!');
    // }

    $user = User::where('email',  $request->email)->first();

    if ($user === null) {
        return redirect()->back()->with('error_msg', 'No User Found!');
    } else {
        
        if ($request->UserType == $user->role) {

            $user = User::where('email',  $request->input('email'))->first();
            if ($user) {
                {
                    $user->delete();
                    return redirect()->back()->with('success_msg', 'User Account deleted successfully!');
                }
            } else {
                return redirect()->back()->with('error_msg', 'Email not found!');
            }
        } else {
            return redirect()->back()->with('error_msg', 'No Such User With this Role');
        }
    }
   }
}
