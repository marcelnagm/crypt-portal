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
    Route::resource('statistics', 'App\Http\Controllers\Admin\StatisticsController');

    Route::resource('signal', SignalController::class);

   Route::get('/price/{id}'   , 'App\Http\Controllers\Admin\SignalController@getPrice');
    Route::resource('op', 'App\Http\Controllers\User\TargetController');
   Route::get('/price/'   , 'App\Http\Controllers\Admin\SignalController@getPrice');
   
    Route::resource('configuration', 'App\Http\Controllers\User\ConfigurationController');
    
    Route::get('/dashboard', 'App\Http\Controllers\User\IndexController@index');
    Route::resource('/notification', 'App\Http\Controllers\User\NotificationController');
    Route::get('/notification_read_all', 'App\Http\Controllers\User\NotificationController@allRead');
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {

    Route::resource('user', 'App\Http\Controllers\Admin\UserController');
// ;
    Route::resource('user_profile', 'App\Http\Controllers\Admin\ProfileController');

    Route::resource('signature-type', 'App\Http\Controllers\Admin\SignatureTypeController');
    Route::resource('statistics', 'App\Http\Controllers\Admin\StatisticsController');
    Route::resource('pair', 'App\Http\Controllers\Admin\PairController');
    Route::get('pair_generate'   , 'App\Http\Controllers\Admin\PairController@retrive');

    Route::resource('signal', SignalController::class);
    Route::get('signals_generate/{id?}', 'App\Http\Controllers\Admin\\SignalController@generate');
    Route::get('signal_IA/', 'App\Http\Controllers\Admin\\SignalController@generateIA');

   Route::get('/dashboard', 'App\Http\Controllers\Admin\IndexController@index');

    Route::resource('user-signature', 'App\Http\Controllers\Admin\UserSignatureController');
    Route::get('price/{?id}'   , 'App\Http\Controllers\Admin\SignalController@getPrice');
    Route::resource('configuration', 'App\Http\Controllers\Admin\ConfigurationController');
    Route::resource('/notification', 'App\Http\Controllers\Admin\NotificationController');
    Route::get('/notification_read_all', 'App\Http\Controllers\Admin\NotificationController@allRead');
});;


Route::prefix('guest')->group(function () {  
    Route::get('/', 'App\Http\Controllers\Guest\IndexController@index');
});

Route::get('/dashboard',function(){
        return view('test');
});    

Route::redirect('/','/login');  