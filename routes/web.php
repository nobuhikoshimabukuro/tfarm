<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\main_controller;
use App\Http\Controllers\mail_controller;
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

Route::get('/', [main_controller::class, 'index'])->name('index');

Route::get('/product', [main_controller::class, 'product'])->name('product');

Route::get('/inquiry', [main_controller::class, 'inquiry'])->name('inquiry');

Route::get('/forcorporation', [main_controller::class, 'forcorporation'])->name('forcorporation');

Route::get('/farminfo', [main_controller::class, 'farminfo'])->name('farminfo');

Route::get('/password_check', [main_controller::class, 'password_check'])->name('password_check');


Route::post('/password_check/password_check_process', [main_controller::class, 'password_check_process'])->name('password_check_process');
Route::post('/inquiry/send_inquiry_mail_process', [main_controller::class, 'send_inquiry_mail_process'])->name('send_inquiry_mail_process');