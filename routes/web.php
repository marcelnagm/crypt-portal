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
})->middleware('auth');
//Route::get('/login', function () {
//    return view('login',array('title'=> 'AutroCrypto Bot'));
//})->name('login');
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
Route::prefix('admin')->group(function () {



    Route::resource('user', 'App\Http\Controllers\UserController')->middleware('auth');
// ;
    Route::resource('user_profile', 'App\Http\Controllers\ProfileController');

    Route::resource('signature-type', 'App\Http\Controllers\\SignatureTypeController')->middleware('auth');
    Route::resource('statistics', 'App\Http\Controllers\\StatisticsController')->middleware('auth');
    Route::resource('pair', 'App\Http\Controllers\\PairController')->middleware('auth');

Route::resource('signal', 'App\Http\Controllers\\SignalController')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::resource('user-signature', 'App\Http\Controllers\\UserSignatureController');

Route::resource('configuration', 'App\Http\Controllers\\ConfigurationController');

});
//});p\Http\Controllers\\PrfoleController');
