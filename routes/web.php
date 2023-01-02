<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('app_home');

Route::get('/about', [HomeController::class, 'about'])->name('app_about');

Route::get('/logout', [LoginController::class, 'logout'])->name('app_logout');

Route::match(['get', 'post'], '/dashbord', [HomeController::class, 'dashbord'])
->middleware('auth')
->name('app_dashbord');

Route::match(['get', 'post'], '/activation_code/{token}', [LoginController::class, 'activation_code'])->name('app_activation_code');

Route::post('/exist_email', [LoginController::class, 'existEEmail'])->name('app_exist_email');

Route::get('/user_checker', [LoginController::class, 'userChecker'])->name('app_user_checker');
