<?php

use Illuminate\Support\Facades\Route;
//import controller file
use App\Http\Controllers\AjaxController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('ProductView', [App\Http\Controllers\ProductController::class, 'index']);

//Route::get('ProductView', [App\Http\Controllers\AjaxController::class, 'create']);
//Route::post('ProductView', [App\Http\Controllers\ProductController::class, 'store']);
//Route::post('ProductView', [App\Http\Controllers\ProductController::class, 'destroy']);
//Route::resource(['ProductView'=>'ProductController']);
//Route::resource('ProductView', 'App\Http\Controllers\ProductController');
Route::resources([
    'ProductView' => 'App\Http\Controllers\ProductController',
    'ajax-request' => 'App\Http\Controllers\AjaxController'
]);

Route::GET('GetData', [App\Http\Controllers\ProductController::class, 'getData']);

/*Route::get('ajax-request', [App\Http\Controllers\AjaxController::class, 'create']);
Route::post('ajax-request', [App\Http\Controllers\AjaxController::class, 'store']);*/
