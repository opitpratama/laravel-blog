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

Route::get('nasikuning', function(){
    return view('nasi');
});

Route::get('admin', function() {
    return view('admin.admin');
});

Route::prefix('admin')->group(function() {
    Route::get('index', function() {
        return "Ini admin";
    });
});

Route::resource('fasilitator', 'FasilitatorController');

Route::get('ini-url/{value}', 'FasilitatorController@namaFunction');