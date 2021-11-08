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
// language
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

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
});

Route::group(['middleware' => 'auth','namespace' => 'App\Http\Controllers\Admin','prefix' => 'admincp'], function() {
    Route::get('user','DatatablesController@user');
});
Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('export/', 'ExportController@export');
    Route::get('import/', 'ImportController@getImport');
    Route::post('import/', 'ImportController@postImport');
});

