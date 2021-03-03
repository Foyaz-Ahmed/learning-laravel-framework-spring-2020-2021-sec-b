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
    return view('login.welcome');
});
/*
Route::get('login', function () {
    return view('login.test');
});
*/
    Route::get('/login','loginController@index');
    Route::post('/login','loginController@verify');
    Route::get('/registration','loginController@register');
    Route::post('/registration','loginController@successreg');

   

    Route::group(['middleware'=>('sess')], function(){

    Route::get('/home','HomeController@index');
    Route::get('/home/userlist','HomeController@userlist');
    Route::get('/home/create','HomeController@create');
  // Route::post('/home/create','HomeController@store');
    Route::get('/home/userlist','HomeController@userlist');
   
    Route::get('/home/details/{id}','HomeController@show');
    Route::get('/sytem/sales/physical_store');
    Route::get('/system/product','HomeController@product');
    Route::get('/system/product_management/existing_product','HomeController@edit');
    Route::get('/system/product_management/upcoming_product','HomeController@upcoming_product');
    Route::get('/system/product_management/add_product','HomeController@store');
    



    });


    Route::get('/logout','LogoutController@index');
