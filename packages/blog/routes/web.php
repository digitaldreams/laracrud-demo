<?php
Route::group(['middleware' => ['web'], 'as' => 'blog::', 'namespace' => 'Blog\Http\Controllers'], function () {
    Route::resource('posts', 'PostController');
});

