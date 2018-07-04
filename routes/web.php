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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('manage/setting', 'Manage\\SettingController');
    
    Route::resource('manage/profil', 'Manage\\ProfilController');
    Route::resource('manage/beban-penerangan', 'Manage\\BebanPeneranganController');
});


Route::resource('manage/beban-lain', 'Manage\\BebanLainController');
Route::resource('manage/beban-a-c', 'Manage\\BebanACController');
Route::resource('manage/beban-mesin', 'Manage\\BebanMesinController');
Route::resource('manage/ruang', 'Manage\\RuangController');
Route::resource('manage/hitung-i-k-e', 'Manage\\HitungIKEController');