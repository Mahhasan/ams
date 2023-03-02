<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'user_profile'])->name('profile');
Route::get('/membership-form', [App\Http\Controllers\UserController::class, 'membership_form'])->name('membership-form');
Route::post('/membership-form', [App\Http\Controllers\UserController::class, 'create_membership'])->name('membership-form');
Route::get('/pending-member-list', [App\Http\Controllers\UserController::class, 'pending_member_list'])->name('pending-member-list');
