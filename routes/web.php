<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::middleware(['web', 'menu'])->group(function() {

    //Web and menu middleware
    Route::get('/home', 'HomeController@index')->name('home')->middleware(['menu']);
    Route::get('/', 'HomeController@index')->name('home')->middleware(['menu']);

    Route::middleware(['auth'])->group(function() {
        //Auth middleware
        Route::get('/profile', 'ProfileController@index')->name('profile');

        Route::get('roles', 'Auth\\RoleController@index')->name('roles.index');
        Route::get('roles/create', 'Auth\\RoleController@create')->name('roles.create');
    });

});




