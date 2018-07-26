<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//auth
$router = app('Dingo\Api\Routing\Router');

$router->version('v1', ['namespace' => 'App\Http\Controllers\Api\Auth'], function ($api) {

    $api->group(['prefix' => 'auth'], function ($api) {

        $api->post('/register', ['as' => 'auth.register', 'uses' => 'RegisterController@store']);
        $api->post('/token', ['as' => 'auth.token', 'uses' => 'TokenController@authenticate']);

        $api->group(['prefix' => 'password', 'middleware' => 'api.auth'], function ($api) {
            $api->post('/reset', ['as' => 'password.reset', 'uses' => 'PasswordController@reset']);
        });

        $api->group(['prefix' => 'password'], function ($api) {
            $api->post('/forget', ['as' => 'password.forget', 'uses' => 'PasswordController@forget']);
            $api->post('/set', ['as' => 'password.set', 'uses' => 'PasswordController@set']);
        });
    });
});

$router->version('v1', ['namespace' => 'App\Http\Controllers\Api'], function ($api) {
    require(__DIR__ . '/version1.php');
});
