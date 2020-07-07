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



// Route::post('usercontroller','UsersController@account');
// Route::post('usercontroller','UsersController@account');
// Route::view('user','validation');

// Route::view('home','home');
// Route::view('profile','profile')->middleware('customRouteAuth');

// Route::group(['middleware'=>['customAuth']],function(){
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });



// Route::view('noaccess','noaccess');

Route::get('profile','Profiles@list');

Route::view('login','login');

Route::post('login','LoginController@login');



Route::get('logout',function(){
  session()->forget('loginData');
  return redirect('login');
});

Route::get('/', function () {
  return view('welcome');
});

Route::group(['middleware'=>['customAuth']],function(){
  Route::view('profile','profile');

});

Route::view('task','task');
Route::post('task','Tasks@index');