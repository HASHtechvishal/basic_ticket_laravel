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

//route front

Route::namespace('front')->group(function(){ 

    Route::match(['get','post'],'/','IndexController@Index');
    Route::match(['get','post'],'user-admin','IndexController@user_admin');
    Route::match(['get','post'],'log-in','IndexController@login');
    Route::get('user_logout','IndexController@userLogout');


    Route::post('search_flight/{id?}','userController@searchFlight');
});

//route for admins

Route::prefix('admin/')->namespace('admin')->group(function(){ 
Route::group(['middleware' => ['admin']], function(){

    Route::match(['get','post'],'dash','AdminController@dash');
    Route::get('log-out','AdminController@adminLogout');


}); 
});   


require __DIR__.'/auth.php';
