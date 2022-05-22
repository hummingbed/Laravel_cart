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


// Route::get('/', [
//     'uses' => 'ProductController@index',
//     'as'   => 'product.index'
// ]);

Route::get('/', 'ProductController@index')->name('product.index');



Route::group(['prefix' => 'user'], function(){

    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signup', 'UserController@getSignUp')->name('user.signup');
        Route::post('/signup', 'UserController@postSignUp');
        
        Route::get('/login', 'UserController@getLogin')->name('user.login');   
        Route::post('/login', 'UserController@postLogin');
    });
  
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/profile', 'UserController@userProfile')->name('user.profile');
        
    });
    Route::get('/logout', 'UserController@logout')->name('user.logout');
    
});