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
Route::get('/question', function () {
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

//UploadDocuments
Route::get('/documents/index', 'DocumentController@index')->name('document_index');
Route::post('/documents/store', 'DocumentController@store')->name('document_store');
Route::post('/document/delete/{id}', 'DocumentController@delete')->name('document_delete');
Route::get('/document/download-file/{id}', 'DocumentController@downloadFile')->name('download_file');
Route::get('/document/create', 'DocumentController@create')->name('document_create');

//Forum
//Forum - Index
Route::get('/forum/index', 'ForumController@index')->name('forum_index');
Route::get('/forum/forum/{id}-{name?}', 'ForumController@forum', function ($id, $random_link = null) {
    $forum = Forum::findOrFail($id);
    $name = $forum->random_link;
    return $name;
})->name('forum_forum');
Route::get('/forum/create', 'ForumController@create')->name('forum_create');
Route::post('/forum/post', 'ForumController@store')->name('forum_post');
Route::get('/forum/list_all_forum', 'ForumController@list_all')->name('forum_all');
//Forum - Replies
Route::post('/forum/comment/{id}', 'CommentController@store')->name('comment_post');
Route::post('/forum/comment/delete/{id}', 'CommentController@delete')->name('comment_delete');
//Forum - Subcomments
Route::post('/forum/subcomment/{id}', 'SubcommentController@store')->name('subcomment_post');
Route::post('/forum/subcomment/delete/{id}', 'SubcommentController@delete')->name('subcomment_delete');
//tickets
Route::get('users/tickets/new', 'TicketsController@view_create')->name('new_ticket');
Route::get('users/tickets/list', 'TicketsController@view_list')->name('list_tickets');


