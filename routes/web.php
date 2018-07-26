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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/test', function () {
    $post = new \App\Models\Post();
});
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('posts', 'PostController');

Route::resource('posts.comments', 'CommentController');


Route::group(['prefix' => 'posts'], function () {

    Route::get('favourite', [
        'as' => 'posts.favourite',
        'uses' => 'PostController@favourite'
    ]);

    Route::get('likes', [
        'as' => 'posts.likes',
        'uses' => 'PostController@likes'
    ]);

});