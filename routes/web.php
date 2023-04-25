<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $helloWorld = 'Hello World';


    return view('welcome', compact('helloWorld'));
})->name('home');

Auth::routes();


Route::get('/model', function(){

$product = \App\Models\Product::find(42);
return $product->categories;

});

Route::group(['middleware' => ['auth']], function(){

    Route::prefix('admin')->name('admin.')->group(function(){

        Route::resource('stores', \App\Http\Controllers\Admin\StoreController::class);
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    });
});
