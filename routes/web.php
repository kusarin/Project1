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

// Route::get('hello', function () {
//     return 'hellllllllo！';
// });

// Route::any('test1',['uses'=>'App\Http\Controllers\UserController@test1']);
// Route::resource('text','App\Http\Controllers\UserController');
// Route::get('info',array('App\Http\Controllers\UserController@info'));
// Route::get('user/delete','App\Http\Controllers\UserController@destroy')->name('user.delete');
 Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('user/add','App\Http\Controllers\UserController@add');
Route::post('user/store','App\Http\Controllers\UserController@store');
