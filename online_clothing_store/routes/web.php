<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('products');
});

Route ::get('/products',[ProductController::class,'index'])->middleware('guest');
Route ::get('/home',[ProductController::class,'userHomePage'])->middleware('auth');

Route ::get('/register',[RegisterController::class,'create'])->middleware('guest');
Route ::post('/register/store',[RegisterController::class,'store'])->middleware('guest');

Route ::get('/login',[RegisterController::class,'loginform'])->middleware('guest');
Route ::post('/login/store',[RegisterController::class,'login'])->middleware('guest');

Route ::get('/logout',[RegisterController::class,'logout'])->middleware('auth');
Route ::get('/adminpanel',[AdminController::class,'adminpanel'])->middleware('auth')->middleware('admin');

Route ::get('/adduser',[AdminController::class,'create'])->middleware('auth')->middleware('admin');
Route ::post('/adduser/store',[AdminController::class,'store'])->middleware('auth')->middleware('admin');

Route ::get('/blockuser',[AdminController::class,'blockuser'])->middleware('auth')->middleware('admin');
Route ::post('/blockuser/block',[AdminController::class,'block'])->middleware('auth')->middleware('admin');

Route ::get('/productcontrol',[ProductController::class,'productcontrol'])->middleware('auth')->middleware('admin');
Route ::post('/productcontrol/delete',[ProductController::class,'productdelete'])->middleware('auth')->middleware('admin');

Route ::get('/deleteuser',[AdminController::class,'deleteuser'])->middleware('auth')->middleware('admin');
Route ::post('/deleteuser/delete',[AdminController::class,'delete'])->middleware('auth')->middleware('admin');

Route ::get('/sellproduct',[ProductController::class,'sellproduct'])->middleware('auth');
Route ::post('/sellproduct/add',[ProductController::class,'add'])->middleware('auth');


Route ::get('/addtocart',[addtocartcontroller::class,'addtocart'])->middleware('auth');
Route ::post('/addtocart/add',[addtocartcontroller::class,'store'])->middleware('auth');
Route ::post('/checkout',[addtocartcontroller::class,'checkout'])->middleware('auth');
