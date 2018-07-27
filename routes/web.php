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
    Route::get('/users', 'Crud\CrudController@index')->name('userlist');

    Route::get('/create/user','Crud\CrudController@create')->name('usercreate');

    Route::post('/create/user','Crud\CrudController@store');

    Route::get('/edit/user/{id}','Crud\CrudController@edit')->name('useredit');

    Route::post('/edit/user/{id}','Crud\CrudController@update');

    Route::delete('/delete/user/{id}','Crud\CrudController@destroy');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/roles', 'RoleController@index')->name('rolelist');
});