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
Auth::routes();

Route::group(['middleware' => 'auth'], function ()
{
    Route::group(['middleware' => ['role:admin']], function ()
    {
        Route::resource('categories', 'CategoriesController');
        Route::get('/categories/{id}/remove', [
            'uses' => 'CategoriesController@remove',
            'as' => 'categories.remove'
        ]);
    });

    Route::resource('products','ProductsController');
    Route::get('/products/{id}/remove', [
        'uses' => 'ProductsController@remove',
        'as' => 'products.remove'
    ]);

    Route::resource('permissions','PermissionsController');
    Route::get('/permissions/{id}/remove', [
        'uses' => 'PermissionsController@remove',
        'as' => 'permissions.remove'
    ]);

    Route::resource('roles','RolesController');
    Route::get('/roles/{id}/remove', [
        'uses' => 'RolesController@remove',
        'as' => 'roles.remove'
    ]);

    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::get('/index', [
        'uses' => 'PageController@getIndex',
        'as' => 'page.index'
    ]);

    Route::get('admin/index', [
        'uses' => 'PageController@getAdminIndex',
        'as' => 'admin.index'
    ]);
});

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
