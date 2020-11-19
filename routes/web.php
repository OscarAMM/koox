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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/question', function(){
    return view('guest.question');
})->name('question');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//usuarios
Route::get('/usuarios/index', 'UserController@index')->name('user_index');
Route::get('/usuarios/create', 'UserController@create')->name('user_create');
Route::post('/usuarios/store', 'UserController@store')->name('user_store');
Route::get('/usuarios/edit/{id}', 'UserController@edit')->name('user_edit');
Route::put('/usuarios/update/{id}', 'UserController@update')->name('user_update');
Route::post('/usuarios/status/{id}', 'UserController@user_status')->name('user_status');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//UploadDocuments
Route::get('/documents/index', 'DocumentController@index')->name('document_index');
Route::post('/documents/store', 'DocumentController@store')->name('document_store');
Route::post('/document/delete/{id}', 'DocumentController@delete')->name('document_delete');
Route::get('/document/download-file/{id}', 'DocumentController@downloadFile')->name('download_file');


//tickets
Route::get('users/tickets/new', 'TicketsController@view_create')->name('new_ticket');
Route::get('users/tickets/list', 'TicketsController@view_list')->name('list_tickets');


