<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', 'App\Http\Controllers\loginController@showLoginForm')->name('beranda');
// Route::post('/', 'App\Http\Controllers\loginController@login')->name('login');
// Route::post('/logout', 'App\Http\Controllers\loginController@logout')->name('logout');

// Authentication Routes...
route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('halamanlogin');
route::post('/', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

// Password Reset Routes...
route::get('/password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm');
route::post('/password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail');
route::get('/password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm');
route::post('/password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset');

Route::middleware(['auth'])->group(function () {
    route::get('/dashboard','App\Http\Controllers\dashboardController@index')->name('dashboard');
    route::get('/dashboard/profil','App\Http\Controllers\dashboardController@profil')->name('dashboard.profil');
    route::get('/dashboard/absensi','App\Http\Controllers\dashboardController@absensi')->name('dashboard.absensi');
    route::get('/dashboard/event','App\Http\Controllers\dashboardController@event')->name('dashboard.event');
    route::get('/dashboard/sertifikat','App\Http\Controllers\dashboardController@sertifikat')->name('dashboard.sertifikat');
});

route::get('/anggota','App\Http\Controllers\berandaController@anggota');