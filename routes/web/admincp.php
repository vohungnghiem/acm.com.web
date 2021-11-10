<?php

// auth
Route::group(['namespace' => 'App\Http\Controllers\Admin','prefix' => 'admincp'], function() {
	Route::get('login', 'AdminLoginController@getLogin')->name('login');
	Route::post('login','AdminLoginController@postLogin');
	Route::get('logout','AdminLoginController@getLogout');
});
// role
Route::group(['middleware' => 'auth','namespace' => 'App\Http\Controllers','prefix' => 'admincp'], function() {
	Route::get('generate','RoleController@generate');
    Route::group(['middleware' => ['role:super-admin'],'prefix' => 'modelroles'],function(){
		Route::get('/','RoleController@get_model');
		Route::post('/','RoleController@post_model');
	});
	Route::group(['middleware' => ['role:super-admin'],'prefix' => 'role_permission'],function(){
		Route::get('/','RoleController@get_role_permission');
		Route::post('/','RoleController@post_role_permission');
	});
});

Route::group(['middleware' => 'auth','namespace' => 'App\Http\Controllers\Admin','prefix' => 'admincp'], function() {
    Route::get('/','HomeController@index');
    Route::group(['prefix' => 'account'],function(){
        Route::get('/','AccountController@index');
        Route::get('create','AccountController@create');
        Route::post('store', 'AccountController@store');
        Route::get('edit/{id}', 'AccountController@edit');
        Route::post('{id}/update', 'AccountController@update');
        Route::post('status','AccountController@status');
        Route::post('remove_img','AccountController@remove_img');
        Route::post('destroy', 'AccountController@destroy');
    });
    Route::group(['prefix' => 'menus'],function(){
        Route::get('/','MenuController@index');
        Route::get('create','MenuController@create');
        Route::post('store', 'MenuController@store');
        Route::get('edit/{id}', 'MenuController@edit');
        Route::post('{id}/update', 'MenuController@update');
        Route::post('status','MenuController@status');
        Route::post('remove_img','MenuController@remove_img');
        Route::post('destroy', 'MenuController@destroy');
    });
});
// database
Route::group(['middleware' => 'auth','namespace' => 'App\Http\Controllers\Admin','prefix' => 'admincp'], function() {
    Route::get('user','DatatablesController@user');
});
// import - export
Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('export/', 'ExportController@export');
    Route::get('import/', 'ImportController@getImport');
    Route::post('import/', 'ImportController@postImport');
});

