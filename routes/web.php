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

//preguntas y respuestas
Route::get('/questions/index', 'QuestionsController@index')->name('questions_index');
Route::get('/questions/create', 'QuestionsController@create')->name('questions_create');
Route::post('/questions/store', 'QuestionsController@store')->name('questions_store');
Route::get('/questions/edit/{id}', 'QuestionsController@edit')->name('questions_edit');
Route::put('/questions/update/{id}', 'QuestionsController@update')->name('questions_update');
Route::put('/questions/status/{id}', 'QuestionsController@question_status')->name('questions_status');

Route::get('/home', 'HomeController@index')->name('home');
