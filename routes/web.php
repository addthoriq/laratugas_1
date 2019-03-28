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

Route::get('/', function () {
    return view('welcome');
});

//---------------------------------------------------------//
// Route::get('/user/{id}/{nama}',function($id, $nama){
//     return 'User '.$id.' '.$nama;
// });
// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });
//
// Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
// });
//
// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         // Matches The "/admin/users" URL
//     });
// });

//---------------------------------------------------------//
Route::get('/kamar/{nama}', 'TugasController@show');
Route::post('/luas-kamar', 'TugasController@proses');

Route::get('/home', function(){
    return view('home.index');
});
// Route::get('/home', function(){
//     return view('admin.home.index', ['name' => 'Thoriq']);
// });
// Route::get('/home', function(){
//     $name   = 'fias';
//     return view('admin.home.index', compact('name'));
// });
Route::get('/contoh', function(){
    $data['nama']   = 'fais';
    $data['alamat'] = 'Jakal';
    $data['jkl']    = 1;
    return view('admin.home.index', $data);
});

Route::prefix('admin')->group(function(){
    Route::get('santri','Admin\SantriController@index');
    Route::get('santri/create','Admin\SantriController@create');
    Route::post('santri','Admin\SantriController@store');
    Route::get('santri/{id}/edit', 'Admin\SantriController@edit');
    Route::put('santri', 'Admin\SantriController@update');
    Route::delete('santri/{id}/delete', 'Admin\SantriController@delete');
});
