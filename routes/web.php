<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Auth;


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
    return view('web.index');
});
Route::get('about', function () {
    return view('web.about');
});
Route::get('services', function () {
    return view('web.services');
});
Route::get('team', function () {
    return view('web.team');
});
Route::get('testimonials', function () {
    return view('web.testimonials');
});
Route::get('appointment', function () {
    return view('web.appointment');
});
Route::get('contact', function () {
    return view('web.contact');
});
Route::get('price', function () {
    return view('web.price');
});


Route::resource('products', ProductController::class);


Route::get('cart', [CartController::class,'index']);
Route::get('add-to-cart/{id}', [CartController::class,'addToCart']);
Route::patch('update-cart', [CartController::class,'updateCart']);
Route::delete('remove-from-cart', [CartController::class,'removeFromCart']);

Auth::routes();

//Route::get('/home', [HomeController::class, 'home'])->name('home');

//Route::prefix('admin/')->group(function () {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//});