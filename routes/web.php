<?php

//tugas hari 12
Route::get('/biodata','BelajarController@biodata');

//tugas hari 13
Route::get('/form','formController@index');
Route::post('/form_hasil','formController@postData');

//tugas hari 14
Route::get('/hitung_segitiga','SegitigaController@hitung');
Route::put('/hasil','SegitigaController@hasil');

//Tugas Hari 15 & 18
Route::get('/produk','ProdukController@data');
Route::get('/produk/tambah_produk','ProdukController@tambah');
Route::post('/produk/proses','ProdukController@proses');

//Tugas Hari 16
Route::get('/produk/hapus/{id}','ProdukController@hapus');

//Tugas Hari 17
Route::get('/produk/edit/{id}','ProdukController@edit');
Route::post('/produk/upload/{id}','ProdukController@upload');
Route::get('produk/cari','ProdukController@cari');

//Tugas Hari 19
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::get('gambar','ProdukController@gambar');







