<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FestController;

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
    return view('index', [
        'title' => 'index'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'contact'
    ]);
});

Route::get('/courses', function () {
    return view('courses', [
        'title' => 'courses'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about'
    ]);
});

Route::get('/register-fest', function () {
    return view('register-fest', [
        'title' => 'register-fest'
    ]);
});

Route::get('/masak-musik-entertainment', function () {
    return view('entertainment', [
        'title' => 'masak-musik-entertainment'
    ]);
});


Route::post('/register-fest', [FestController::class, 'store']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

    Route::get('/passsword/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');

    Route::post('/passsword/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'confirm']);
    
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});