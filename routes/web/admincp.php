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
    Route::group(['prefix' => 'camnhans'],function(){
        Route::get('/','CamNhanController@index');
        Route::get('create','CamNhanController@create');
        Route::post('store', 'CamNhanController@store');
        Route::get('edit/{id}', 'CamNhanController@edit');
        Route::post('{id}/update', 'CamNhanController@update');
        Route::post('status','CamNhanController@status');
        Route::post('remove_img','CamNhanController@remove_img');
        Route::post('destroy', 'CamNhanController@destroy');
    });
    Route::group(['prefix' => 'tintucs'],function(){
        Route::get('/','TinTucController@index');
        Route::get('create','TinTucController@create');
        Route::post('store', 'TinTucController@store');
        Route::get('edit/{id}', 'TinTucController@edit');
        Route::post('{id}/update', 'TinTucController@update');
        Route::post('status','TinTucController@status');
        Route::post('remove_img','TinTucController@remove_img');
        Route::post('destroy', 'TinTucController@destroy');
    });
    Route::group(['prefix' => 'hinhanhs'],function(){
        Route::get('/','HinhAnhController@index');
        Route::get('create','HinhAnhController@create');
        Route::post('store', 'HinhAnhController@store');
        Route::get('edit/{id}', 'HinhAnhController@edit');
        Route::post('{id}/update', 'HinhAnhController@update');
        Route::post('status','HinhAnhController@status');
        Route::post('remove_img','HinhAnhController@remove_img');
        Route::post('destroy', 'HinhAnhController@destroy');
    });
    Route::group(['prefix' => 'lienhes'],function(){
        Route::get('/','LienHeController@index');
        // Route::get('create','LienHeController@create');
        // Route::post('store', 'LienHeController@store');
        // Route::get('edit/{id}', 'LienHeController@edit');
        // Route::post('{id}/update', 'LienHeController@update');
        Route::post('status','LienHeController@status');
        Route::post('remove_img','LienHeController@remove_img');
        Route::post('destroy', 'LienHeController@destroy');
    });
    Route::group(['prefix' => 'diachis'],function(){
        Route::get('/','DiaChiController@index');
        Route::get('create','DiaChiController@create');
        Route::post('store', 'DiaChiController@store');
        Route::get('edit/{id}', 'DiaChiController@edit');
        Route::post('{id}/update', 'DiaChiController@update');
        Route::post('status','DiaChiController@status');
        Route::post('remove_img','DiaChiController@remove_img');
        Route::post('destroy', 'DiaChiController@destroy');
    });
    Route::group(['prefix' => 'mxhs'],function(){
        Route::get('/','MXHController@index');
        Route::get('create','MXHController@create');
        Route::post('store', 'MXHController@store');
        Route::get('edit/{id}', 'MXHController@edit');
        Route::post('{id}/update', 'MXHController@update');
        Route::post('status','MXHController@status');
        Route::post('remove_img','MXHController@remove_img');
        Route::post('destroy', 'MXHController@destroy');
    });
    Route::group(['prefix' => 'donhangs'],function(){
        Route::get('/','DonHangController@index');
        Route::get('create','DonHangController@create');
        Route::post('store', 'DonHangController@store');
        Route::get('edit/{id}', 'DonHangController@edit');
        Route::post('{id}/update', 'DonHangController@update');
        Route::post('status','DonHangController@status');
        Route::post('destroy', 'DonHangController@destroy');
    });

    Route::group(['prefix' => 'license-page'],function(){
        Route::get('/','LicensePageControler@index');
        Route::get('create','LicensePageControler@create');
        Route::post('store', 'LicensePageControler@store');
        Route::get('edit/{id}', 'LicensePageControler@edit');
        Route::post('{id}/update', 'LicensePageControler@update');
        Route::post('status','LicensePageControler@status');
        Route::post('destroy', 'LicensePageControler@destroy');
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

