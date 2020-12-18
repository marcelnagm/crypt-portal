<?php

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
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::resource('produtos', 'App\Http\Controllers\ProdutosController');
Route::resource('user', 'App\Http\Controllers\UserController');
//        ->middleware('auth');
Route::resource('profile', 'App\Http\Controllers\ProfileController');

Route::resource('signature-type', 'App\Http\Controllers\\SignatureTypeController');

//Route::prefix('produtos')->group(function () {
//    Route::get('/new', 'App\Http\Controllers\ProdutosController@create');
//
//    Route::post('/store', 'App\Http\Controllers\ProdutosController@create')->name('produtos.store');
//    
//});

//Route::prefix('produtos')->group(function () {
//    Route::get('produtos/new', 'ProdutosController@create');
//});


//Route::get('/greeting', function () {
//    return 'Hello World';
//});

//Route::match(['get', 'post'], '/', function () {
//    //
//});

//Route::redirect('/here', '/there');


//Route::view('/welcome2/{id}', 'test', ['now' => 'Pega','message' => 'vamos que vamos']);

//Route::get(
//    '/user/profile',
//    [UserProfileController::class, 'show']
//)->name('profile');

// ideal para modulos
//Route::prefix('admin')->group(function () {
//    Route::get('/users', function () {
//        // Matches The "/admin/users" URL
//    });
//});
