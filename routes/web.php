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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/users', 'UserController@index')->name('userlist');

    Route::get('/create/user','UserController@create')->name('usercreate');

    Route::post('/create/user','UserController@store');

    Route::get('/show/user/{id}','UserController@show')->name('usershow');

    Route::get('/edit/user/{id}','UserController@edit')->name('useredit');

    Route::patch('/edit/user/{id}','UserController@update');

    Route::delete('/delete/user/{id}','UserController@destroy');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/roles', 'RoleController@index')->name('rolelist');

    Route::get('/roles/create', 'RoleController@create')->name('rolecreate');

    Route::post('/roles/create', 'RoleController@store');

    Route::get('/roles/show/{id}','RoleController@show')->name('roleshow');

    Route::get('/roles/edit/{id}', 'RoleController@edit')->name('roleedit');

    Route::patch('/roles/edit/{id}', 'RoleController@update');

    Route::delete('/roles/delete/{id}', 'RoleController@destroy')->name('roledelete');
});