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

Route::get('ajaxruang', 'AjaxController@auto_item');

Route::group(['middleware' => ['web']], function () {
    // Authentication Routing...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');
    // Password Reset Routing...
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

    $this->post('password/reset', 'Auth\ResetPasswordController@reset');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    //Route::resource('manage/setting', 'Manage\\SettingController');
   
    Route::resource('manage/profil', 'Manage\\ProfilController', [
      'except' => ['index','create', 'show']
    ]);
    
    Route::resource('manage/ruang', 'Manage\\RuangController');
    Route::resource('manage/beban-penerangan', 'Manage\\BebanPeneranganController');
    Route::resource('manage/hitung-ike', 'Manage\\HitungIkeController');
    Route::resource('manage/beban-mesin', 'Manage\\BebanMesinController');
    Route::resource('manage/beban-ac', 'Manage\\BebanAcController');
    Route::resource('manage/beban-lain', 'Manage\\BebanLainController');
    Route::resource('manage/user', 'Manage\\UsersController');

    
    Route::get('laporanbebanmesin', 'LaporanController@laporanbebanmesin');
    Route::get('laporanbebanlain', 'LaporanController@laporanbebanlain');
    Route::get('laporanbebanac', 'LaporanController@laporanbebanac');
    Route::get('laporanbebanpenerangan', 'LaporanController@laporanbebanpenerangan');
    Route::get('laporanruang', 'LaporanController@laporanruang');
    Route::get('laporandataike', 'LaporanController@laporandataike');
    Route::get('laporandashboard', 'LaporanController@laporandashboard');


});


Route::resource('manage/tasks', 'Manage\\TasksController');