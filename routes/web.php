<?php

use App\Mail\GuestMail;
use App\Mail\QrMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/email', function () {
    return new QrMail();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('wisudawan')->middleware('auth')->group(function(){
    Route::resource('/datadiri', 'DatadiriController');
});

Route::prefix('wisudawan')->middleware('auth')->group(function(){
    Route::resource('/pembayaran', 'PembayaranController');
});

Route::prefix('wisudawan')->middleware('auth')->group(function(){
    Route::resource('/qrcode', 'QRcodeController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::prefix('admin')->middleware('can:manage-users')->group(function(){
    Route::resource('/wisudawan', 'WisudawanController');
});

Route::prefix('admin')->middleware('can:manage-users')->group(function(){
    Route::resource('/dashboard', 'DashboardController');
});

Route::prefix('admin')->middleware('can:manage-users')->group(function(){
    Route::resource('/tamuUndangan', 'TamuUndanganController' );
});

Route::prefix('admin')->middleware('can:manage-users')->group(function(){
    Route::resource('/listPembayaran', 'ListPembayaranController' );
});

Route::resource('/tamu', 'TamuController' );

Route::get('wisudawan/export-excel', 'WisudawanController@exportExcel');
