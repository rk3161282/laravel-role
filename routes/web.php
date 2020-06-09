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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('','LoginController@index')->name('login');
Route::get('/logout','LoginController@logout')->name('logout');
Route::get('/register','UserController@index')->name('register');
Route::post('submitRegisterData','UserController@submitRegisterData');
Route::post('submitLogin','LoginController@submitLoginData');
Route::get('dashboard','DashboardController@index')->name('dashboard');
Route::get('allSchoolList','SchoolController@index');


Route::resource('role', 'RoleController');
Route::get('roleList','RoleController@index')->name('roleList');

