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
Route::post('/insert_kelas','Kelascontroller@store');
Route::post('/insert_siswa','Siswacontroller@store');

Route::get('/getsiswakelas','Siswacontroller@getsiswakelas');
Route::put('/update_siswa/{id}','Siswacontroller@update');
Route::delete('/delete_siswa/{id}','Siswacontroller@destroy');

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

Route::post('/add_book', 'BookController@store');
Route::get('/book', 'BookController@book');
Route::put('/update_buku/{id}','BookController@update');

Route::get('/bookall', 'BookController@bookAuth')->middleware('jwt.verify');
Route::get('/user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');

Route::post('/pinjam_buku','transaksiController@pinjamBuku');
Route::post('tambah_item/{id}','transaksiController@tambahItem');
Route::post('/pengembalian_buku','transaksiController@pengembalianBuku');