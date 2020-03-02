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

Route::get('/', 'homepage');

Route::get('user', 'UserController@getUser');

Route::get('user/add', 'AddUserController@getAddUser');
Route::post('user/add', 'AddUserController@postAddUser');

Route::get('user/edit/{idUser}', 'EditUserController@getEditUser');
Route::post('user/edit/{idUser}', 'editUserController@posteditUser');

Route::get('user/del/{idUser}', 'UserController@delUser');
