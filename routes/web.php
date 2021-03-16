<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});


// Route::post("login",[LoginController::class,'login'])->name('logins');

// Route::view('register', 'auth.register')->name('regist');
// Route::post("register",[RegisterController::class,'register']);




Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('is_user');

Route::get("products",[ProductController::class,'index'])->name('prods');
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart'])->middleware('is_user');
Route::get("cartlist",[ProductController::class,'cartList'])->middleware('is_user');
Route::get("removecart/{id}",[ProductController::class,'removeCart'])->middleware('is_user');
Route::get("ordernow",[ProductController::class,'orderNow'])->middleware('is_user');
Route::post("orderplace",[ProductController::class,'orderPlace'])->middleware('is_user');
Route::get("myorders",[ProductController::class,'myOrders'])->middleware('is_user');




Route::get('admin/home', [AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/users', [AdminController::class, 'userList'])->name('userlist')->middleware('is_admin');

Route::get("admin/addproduct",[ProductController::class,'addProductForm'])->name('addproduct')->middleware('is_admin');
Route::post("admin/addproduct",[ProductController::class,'addProduct'])->middleware('is_admin');

Route::get("admin/editproduct",[ProductController::class,'editProduct'])->name('editproduct')->middleware('is_admin');
Route::get("admin/editproduct/{id}",[ProductController::class,'starteditProduct'])->middleware('is_admin');
Route::post("admin/editproduct",[ProductController::class,'updateProduct'])->middleware('is_admin');

Route::get("admin/product/{id}",[ProductController::class,'deleteProduct'])->name('deleteProduct')->middleware('is_admin');

Route::get("admin/orderstatus",[ProductController::class,'orderStatus'])->name('orderstatus')->middleware('is_admin');
