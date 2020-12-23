<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SignalController;

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


Route::get('logout', 'App\Http\Controllers\LogoutController@logout');
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
//Route::redirect('/here', '/there');
//Route::view('/welcome2/{id}', 'test', ['now' => 'Pega','message' => 'vamos que vamos']);
//Route::get(
//    '/user/profile',
//    [UserProfileController::class, 'show']
//)->name('profile');
// ideal para modulos
Route::middleware(['auth:sanctum', 'verified'])->prefix('user')->group(function () {
    Route::resource('statistics', 'App\Http\Controllers\Admin\StatisticsController')->middleware('auth');

    Route::resource('signal', SignalController::class)->middleware('auth');

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('layout_user');
    })->name('dashboard');

    Route::resource('op', 'App\Http\Controllers\User\TargetController');

    Route::resource('configuration', 'App\Http\Controllers\User\ConfigurationController');
});;

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {

    Route::resource('user', 'App\Http\Controllers\Admin\UserController')->middleware('auth');
// ;
    Route::resource('user_profile', 'App\Http\Controllers\Admin\ProfileController');

    Route::resource('signature-type', 'App\Http\Controllers\Admin\SignatureTypeController')->middleware('auth');
    Route::resource('statistics', 'App\Http\Controllers\Admin\StatisticsController')->middleware('auth');
    Route::resource('pair', 'App\Http\Controllers\Admin\PairController')->middleware('auth');

    Route::resource('signal', SignalController::class)->middleware('auth');
    Route::get('signals_generate/{id?}', 'App\Http\Controllers\Admin\\SignalController@generate')->middleware('auth');

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('layout');
    })->name('dashboard');

    Route::resource('user-signature', 'App\Http\Controllers\Admin\UserSignatureController')->middleware('auth');

    Route::resource('configuration', 'App\Http\Controllers\Admin\ConfigurationController')->middleware('auth');
});;


Route::get('/',function(){
        return view('test');
})->middleware('auth');    
