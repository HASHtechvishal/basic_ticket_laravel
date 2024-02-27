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
    Route::get('log-in','IndexController@login');
});

require __DIR__.'/auth.php';
