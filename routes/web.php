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
});

Auth::routes();


Route::get('/model', function(){

    \App\Models\Category::create([
            'name' => 'Notebook Gamer',
            'description' => 'Notebooks gamers de varíos valores',
            'slug' => 'notebook-gamer'
]);

    \App\Models\Category::create([
        'name' => 'Jogos',
        'description' => 'Jogos de varíos valores',
        'slug' => 'jogos'
]);

        return \App\Models\Category::all();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
