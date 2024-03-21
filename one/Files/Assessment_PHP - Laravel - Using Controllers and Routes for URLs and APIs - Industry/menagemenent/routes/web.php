<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnValueMap;

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

Route::get('/', function () {
    return view('homeView');
})->name('home');

Route::view('/addMemberPage','addMemberView')->name('addMemberPage');
Route::view('/addSecurityPage','addSecurityView')->name('addSecurityPage');
Route::view('/forgotPasswordPage','forgotPasswordView')->name('forgotPasswordPage');
Route::get('/loginPage',fn()=>view('loginView'))->name('loginPage');
Route::view('/showMemberPage','showMemberView')->name('showMemberPage');
Route::view('/showSecurityPage','showSecurityView')->name('showSecurityPage');
