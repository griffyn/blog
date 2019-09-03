<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['middleware' => 'api',], function () {
//     Route::group(['prefix' => 'auth',], function () {
//         $this->post('login', 'Api\AuthController@login');
//     });    
// });

Route::group(['middleware' => 'auth:api'], function () {
    Route::group(['prefix' => 'product'], function () {
        $this->get('/', 'Api\ProductController@index');
        $this->post('/', 'Api\ProductController@create');
    });
    Route::group(['prefix' => 'role'], function () {
        $this->get('/', 'Api\RoleController@index');
        $this->post('/', 'Api\RoleController@create');
    });
    Route::group(['prefix' => 'auth'], function () {
        $this->post('register', 'Api\AuthController@register');
        $this->get('logout', 'Api\AuthController@logout');
    });
});
Route::group(['middleware' => 'api'], function () {
    Route::group(['prefix' => 'auth'], function () {
        $this->post('login', 'Api\AuthController@login');
    });
});

