<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
	Route::get('/siswa','SiswaController@index');
	Route::post('/siswa/create','SiswaController@create');
	Route::get('/siswa/{id}/edit','SiswaController@edit');
	Route::post('/siswa/{id}/update','SiswaController@update');
	Route::get('/siswa/{id}/delete','SiswaController@delete');
	Route::get('/siswa/{id}/profile','SiswaController@profile');
	Route::post('/siswa/{id}/addnilai','SiswaController@addnilai');
});

Route::group(['middleware' => ['auth','checkRole:admin,siswa']],function(){
	Route::get('/dashboard','DashboardController@index');
});
