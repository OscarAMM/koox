<?php

use App\Content;
use App\Forum;
use App\Profile;
use App\file_profile;
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
    $content = Content::orderBy('id', 'desc')->get()->take(1);
    $profiles = Profile::all();
    return view('welcome', compact('content','profiles'));
})->name('welcome');

Route::get('/question', function () {
    return view('guest.question');
})->name('question');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//usuarios
Route::get('/user/index', 'UserController@index')->name('user_index');
Route::get('/user/create', 'UserController@create')->name('user_create');
Route::post('/user/store', 'UserController@store')->name('user_store');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user_edit');
Route::put('/user/update/{id}', 'UserController@update')->name('user_update');
Route::post('/user/status/{id}', 'UserController@user_status')->name('user_status');
Route::get('/user/perfil/{id}', 'UserController@user_profile')->name('user_profile');
Route::get('/user/public_edit/{id}', 'UserController@user_edit_form')->name('user_public_edit');
Route::put('/user/public_update/{id}', 'UserController@user_public_edit')->name('user_public_update');

//UploadDocuments
Route::get('/documents/index', 'DocumentController@index')->name('document_index');
Route::post('/documents/store', 'DocumentController@store')->name('document_store');
Route::post('/document/delete/{id}', 'DocumentController@delete')->name('document_delete');
Route::get('/document/download-file/{id}', 'DocumentController@downloadFile')->name('download_file');
Route::get('/document/create', 'DocumentController@create')->name('document_create');

//Forum - Index
Route::get('/forum/index', 'ForumController@index')->name('forum_index');
Route::get('/forum/public-index', function () {
    $forum = Forum::where('status', 'Nuevo')->get()->take(5);
    return view('forum.public_index', compact('forum'));
})->name('forum_public_index');
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
Route::get('/tickets/new', 'TicketsController@create')->name('new_ticket');
Route::post('/tickets/store', 'TicketsController@store')->name('tickets_store');
Route::get('/tickets/list', 'TicketsController@index')->name('list_tickets');
Route::put('/tickets/view/options/{id}', 'TicketsController@update_options')->name('options_tickets');
Route::get('/tickets/view/data/{id}', 'TicketsController@view_options')->name('data_tickets');
Route::get('/tickets/edit/{id}', 'TicketsController@edit')->name('tickets_edit');
Route::put('/tickets/update/{id}', 'TicketsController@update')->name('tickets_update');
Route::get('/tickets/status/{id}', 'TicketsController@question_status')->name('tickets_status');
Route::put('/tickets/status/cancel/{id}', 'TicketsController@cancel')->name('tickets_cancel');
Route::put('/tickets/user_message_ok', 'TicketsController@view_message')->name('tickets_message');
//Content routes
Route::get('/main-content/index', 'ContentController@index')->name('content_index');
Route::get('/main-content/create', 'ContentController@create')->name('content_create');
Route::post('/main-content/post', 'ContentController@store')->name('content_store');
Route::put('/tickets/view/options/{id}', 'TicketsController@update_options')->name('options_tickets');
Route::get('/tickets/view/data/{id}', 'TicketsController@view_options')->name('data_tickets');
//Preguntas y respuestas
Auth::routes();
//preguntas y respuestas
Route::get('/questions/index', 'FaqController@index')->name('questions_index');
Route::get('/questions/user_index', 'FaqController@user_index')->name('questions_user_index');
Route::get('/questions/create', 'FaqController@create')->name('questions_create');
Route::post('/questions/store', 'FaqController@store')->name('questions_store');
Route::get('/questions/edit/{id}', 'FaqController@edit')->name('questions_edit');
Route::put('/questions/update/{id}', 'FaqController@update')->name('questions_update');
Route::put('/questions/status/{id}', 'FaqController@question_status')->name('questions_status');
Route::get('/questions/download-file/{id}', 'FaqController@download_faq_file')->name('faq_download_file');

//Perfiles
Route::get('/profiles/create', 'ProfileController@create')->name('profiles_create');
Route::post('/profiles/new', 'ProfileController@store')->name('profiles_store');
route::get('/profiles/index', 'ProfileController@index')->name('profiles_index');

//Profile_files
Route::get('/profiles/createfile/{id}', 'FileController@create')->name('files_create');
Route::post('/profiles/store/{id}', 'FileController@store')->name('file_store');
Route::post('/file/delete/{id}', 'FileController@delete')->name('file_delete');
Route::get('/file/download-file/{id}', 'FileController@downloadFile')->name('file_download');

