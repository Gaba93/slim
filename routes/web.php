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

        //Routes for the Roles
        Route::resource('roles', 'Auth\\RoleController');

        //Routes for the permissions
        Route::resource('permissions', 'Auth\\PermissionController');

        //Routes for the teams
        Route::resource('teams', 'Auth\\TeamController');
    });

});




