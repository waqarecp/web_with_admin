<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UsersController;
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
Route::group(['middleware' => ['guest']], function() {

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

    Route::get('cart', [CartController::class,'index']);
    Route::get('add-to-cart/{id}', [CartController::class,'addToCart']);
    Route::patch('update-cart', [CartController::class,'updateCart']);
    Route::delete('remove-from-cart', [CartController::class,'removeFromCart']);
    Route::get('checkout', [CheckoutController::class,'checkout']);

});


// Route::group(['middleware' => ['auth', 'permission']], function() {

//          /**
//          * User Routes
//          */
//         Route::group(['prefix' => 'users'], function() {
//             Route::get('/', [UsersController::class,'index'])->name('users.index');
//             Route::get('/create', [UsersController::class,'create'])->name('users.create');
//             Route::post('/create', [UsersController::class,'store'])->name('users.store');
//             Route::get('/{user}/show', [UsersController::class,'show'])->name('users.show');
//             Route::get('/{user}/edit', [UsersController::class,'edit'])->name('users.edit');
//             Route::patch('/{user}/update', [UsersController::class,'update'])->name('users.update');
//             Route::delete('/{user}/delete', [UsersController::class,'destroy'])->name('users.destroy');
//         });

//                 /**
//          * Post Routes
//          */
//         Route::group(['prefix' => 'posts'], function() {
//             Route::get('/', 'PostsController@index')->name('posts.index');
//             Route::get('/create', 'PostsController@create')->name('posts.create');
//             Route::post('/create', 'PostsController@store')->name('posts.store');
//             Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
//             Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
//             Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
//             Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
//         });

//     Route::resource('roles', RolesController::class);
//     Route::resource('permissions', PermissionsController::class);
// });



Auth::routes();

Route::group(['middleware' => ['auth', 'role:admin']], function() {

Route::prefix('admin')->group(function () {

    Route::get('/', [AdminController::class,'index'])->name('admin.home')->middleware('is_admin');
    Route::get('/view-products', [AdminController::class,'view_products']);
    Route::post('/getproducts', [ProductController::class,'getProducts'])->name('products.get');
    Route::get('/alerts', [AdminController::class,'alerts']);
    Route::get('/accordion', [AdminController::class,'accordion']);
    Route::get('/badges', [AdminController::class,'badges']);
    Route::get('/breadcrumbs', [AdminController::class,'breadcrumbs']);
    Route::get('/buttons', [AdminController::class,'buttons']);
    Route::get('/cards', [AdminController::class,'cards']);
    Route::get('/carousel', [AdminController::class,'carousel']);
    Route::get('/group', [AdminController::class,'group']);
    Route::get('/modal', [AdminController::class,'modal']);
    Route::get('/tabs', [AdminController::class,'tabs']);
    Route::get('/pagination', [AdminController::class,'pagination']);
    Route::get('/progress', [AdminController::class,'progress']);
    Route::get('/spinners', [AdminController::class,'spinners']);
    Route::get('/tooltips', [AdminController::class,'tooltips']);
    Route::get('/forms-elements', [AdminController::class,'forms_elements']);
    Route::get('/forms-layouts', [AdminController::class,'forms_layouts']);
    Route::get('/forms-editors', [AdminController::class,'forms_editors']);
    Route::get('/forms-validation', [AdminController::class,'forms_validation']);
    Route::get('/forms-validation', [AdminController::class,'forms_validation']);
    Route::get('/tables-general', [AdminController::class,'tables_general']);
    Route::get('/tables-data', [AdminController::class,'tables_data']);
    Route::get('/charts-chartjs', [AdminController::class,'charts_chartjs']);
    Route::get('/charts-apexcharts', [AdminController::class,'charts_apexcharts']);
    Route::get('/charts-echarts', [AdminController::class,'charts_echarts']);
    Route::get('/icons-bootstrap', [AdminController::class,'icons_bootstrap']);
    Route::get('/icons-remix', [AdminController::class,'icons_remix']);
    Route::get('/icons-boxicons', [AdminController::class,'icons_boxicons']);
    Route::get('/users-profile', [AdminController::class,'users_profile']);
    Route::get('/faq', [AdminController::class,'faq']);
    Route::get('/contact', [AdminController::class,'contact']);
    Route::get('/register', [AdminController::class,'register']);
    Route::get('/login', [AdminController::class,'login']);
    Route::get('/404', [AdminController::class,'NotFound']);
    Route::get('/blank', [AdminController::class,'blank']);
    Route::resource('products', ProductController::class); 
    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
});

});
// admin routes end

// customer routes

Route::group(['middleware' => ['auth']], function() {
Route::prefix('customer')->group(function () {

    Route::get('/', [CustomerController::class,'index'])->name('customer.home');
    Route::get('/profile', [CustomerController::class,'profile']);
    
    });
});
// end custoemr routes







