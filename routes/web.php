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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/person','personController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/qualy','qualyController');

Route::resource('/project','projectController');


Route::resource('/study','feasabilityController');
Route::get('/','indexController@getsearch');
//Route::resource('/','indexController');
Route::get('/print/{id}','indexController@print');
Route::get('/print/pdf/{id}','indexController@export_pdf');

Route::get('/printpro/{id}','indexController@printpro');
Route::get('/printpro/pdf/{id}','indexController@proexport_pdf');
