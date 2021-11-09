<?php
Route::group(['namespace' => 'App\Http\Controllers\Main'], function() {
	Route::get('/','MainController@home');
    Route::get('/gioithieu','MainController@gioiThieu');

    //donhang
    Route::get('donhang','DonHangController@index');
    Route::get('donhang/{id}','DonHangController@getiddonhang'); // mat
    // dieuduong
    Route::get('dieuduong','TinTucController@dieuduong');
    Route::get('tintuc','TinTucController@tintuc');
    Route::get('tintuc/{slug}','TinTucController@detail');
});

// Route::get('lienhe','LienHeController@index');

// Route::get('tintuc','TinTucController@index');



// //giayphep
// Route::get('giayphep','GiayPhepController@index');

// //lienhe
// Route::post('/store', 'HomeController@store');

// //hinhanh
// Route::get('hinhanh','HinhAnhController@index');
// Route::get('hinhanh/{id}','HinhAnhController@getidhinhanh');

