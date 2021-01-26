<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\IndexController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
/*Route::get('/admin_panel/add_product', function () {
    return view('add_product');
    //return view('welcome');
});*/
//Route::get('/admin_panel/', function () {
//    return view('adminpanel');
//    //return view('welcome');
//});



Route::get('/',[
    IndexController::class,
    'index'
]);




Route::get('/logout', [
    LoginController::class,
    'logout'
]);


Auth::routes();


Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin'
], function () {
    Route::resource('products', ProductController::class);


});
