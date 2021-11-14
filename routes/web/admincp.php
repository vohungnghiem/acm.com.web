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
    Route::group(['prefix' => 'banners'],function(){
        Route::get('/','BannerController@index');
        Route::get('create','BannerController@create');
        Route::post('store', 'BannerController@store');
        Route::get('edit/{id}', 'BannerController@edit');
        Route::post('{id}/update', 'BannerController@update');
        Route::post('status','BannerController@status');
        Route::post('remove_img','BannerController@remove_img');
        Route::post('destroy', 'BannerController@destroy');
    });
    Route::group(['prefix' => 'gioithieus'],function(){
        Route::get('/','GioiThieuController@index');
        Route::get('create','GioiThieuController@create');
        Route::post('store', 'GioiThieuController@store');
        Route::get('edit/{id}', 'GioiThieuController@edit');
        Route::post('{id}/update', 'GioiThieuController@update');
        Route::post('status','GioiThieuController@status');
        Route::post('remove_img','GioiThieuController@remove_img');
        Route::post('destroy', 'GioiThieuController@destroy');
    });
    Route::group(['prefix' => 'muctieus'],function(){
        Route::get('/','MucTieuController@index');
        Route::get('create','MucTieuController@create');
        Route::post('store', 'MucTieuController@store');
        Route::get('edit/{id}', 'MucTieuController@edit');
        Route::post('{id}/update', 'MucTieuController@update');
        Route::post('status','MucTieuController@status');
        Route::post('remove_img','MucTieuController@remove_img');
        Route::post('destroy', 'MucTieuController@destroy');
    });
    Route::group(['prefix' => 'hosos'],function(){
        Route::get('/','HoSoController@index');
        Route::get('create','HoSoController@create');
        Route::post('store', 'HoSoController@store');
        Route::get('edit/{id}', 'HoSoController@edit');
        Route::post('{id}/update', 'HoSoController@update');
        Route::post('status','HoSoController@status');
        Route::post('remove_img','HoSoController@remove_img');
        Route::post('destroy', 'HoSoController@destroy');
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

