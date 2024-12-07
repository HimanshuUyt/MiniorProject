<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\User1Controller;
use App\Models\Category;
use App\Models\User1;
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
Route::get('/',[User1Controller::class,"home"]);

Route::get('/admin',[User1Controller::class,"admin"]);


Route::get('/packagedetails', function () {
    return view('packagedetails');
});

// Category
Route::resource("/destination",DestinationController::class);
Route::get("/register",[User1Controller::class,'index']);
Route::post('/register_user',[User1Controller::class,'register']);

// package
Route::resource("/package",PackageController::class);

//user
Route::get("/users",[User1Controller::class,'getalluser']);


// package Details
Route::get("/detail/{id}",[User1Controller::class,'detail']);

//About Page
Route::get("/about",[User1Controller::class,'about']);

//Blog Page
Route::get("/blog",[User1Controller::class,'blog']);

//Contact Page
Route::get("/contact",[User1Controller::class,'contact']);

//Destination Page


//guid Page
Route::get("/guide",[User1Controller::class,'guide']);



//service Page
Route::get("/services",[User1Controller::class,'services']);

//single Page
Route::get("/single",[User1Controller::class,'single']);

//testimonial Page
Route::get("/testimonial",[User1Controller::class,'testimonial']);

//Login page
Route::get("/login",[User1Controller::class,"index1"]);
Route::post("/login_user",[User1Controller::class,'login']);

//Add to cart
Route::get('/cart',[CartController::class,'getCartItem']);
Route::get('/confirm',[CartController::class,'confirm']);
Route::get('/remove/{id}',[CartController::class,'removeCart']);
Route::get('/addcart/{id}',[CartController::class,'addtocart']);
Route::get('/orders',[CartController::class,'orders']);

//search
Route::post('/search',[User1Controller::class,'search']);

//Otp Verify
Route::get('/otpverify', function () {
    return view('otpverify');
});

Route::get('/logout', function () {
    session()->flush();  // Clears all session data
    return redirect('/');
});

Route::get("/bycat{id}",[User1Controller::class,'PackageByCat']);

Route::get("/packagepage",[User1Controller::class,'allpackage']);
//Route::get("/destinationpage",[User1Controller::class,'alldestination']);

Route::get('/orders',[CartController::class,'orders']);


//Profile
Route::get('/profile', function () {
    return view('profile');
});

Route::post('/profileupdate',[User1Controller::class,'profileupdate']);