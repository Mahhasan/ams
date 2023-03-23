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
Route::put('/update_profile_pic', [App\Http\Controllers\UserController::class, 'update_profile_pic'])->name('update_profile_pic');
Route::put('/update_user_profile', [App\Http\Controllers\UserController::class, 'update_user_profile'])->name('update_user_profile');
Route::put('/update_Admin_profile', [App\Http\Controllers\UserController::class, 'update_Admin_profile'])->name('update_Admin_profile');
Route::put('/update_bio', [App\Http\Controllers\UserController::class, 'update_bio'])->name('update_bio');


Route::get('/membership-form', [App\Http\Controllers\UserController::class, 'membership_form'])->name('membership-form');
Route::post('/membership-form', [App\Http\Controllers\UserController::class, 'create_membership'])->name('membership-form');
Route::get('/pending-member-list', [App\Http\Controllers\UserController::class, 'pending_member_list'])->name('pending-member-list');
Route::get('/member_list', [App\Http\Controllers\UserController::class, 'member_list'])->name('member_list');
Route::get('/member_details/{id}', [App\Http\Controllers\UserController::class, 'member_details'])->name('member_details');
Route::put('/member_details/{id}', [App\Http\Controllers\UserController::class, 'member_status']);


Route::get('/users', [App\Http\Controllers\EmailController::class, 'index'])->name('users');
Route::post('/users-send-email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('ajax.send.email');

// For Cal
Route::get('/calendar', function () {
    return view('calendar');
});

