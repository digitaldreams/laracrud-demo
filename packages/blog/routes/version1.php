<?php
/**
 * Created by PhpStorm.
 * User: Tuhin
 * Date: 7/27/2018
 * Time: 9:38 AM
 */
$api->resource('posts', 'PostController');
$api->resource('posts.comments','CommentController');
$api->resource('categories','CategoryController');
$api->resource('tags','TagController');


