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


// For Event Management
Route::middleware(['auth'])->group(function () {
    Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [App\Http\Controllers\EventController::class, 'create'])->name('events.create');
    Route::post('/events', [App\Http\Controllers\EventController::class, 'store'])->name('events.store');
    Route::get('/events/{event}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');
    Route::get('/events/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [App\Http\Controllers\EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{event}', [App\Http\Controllers\EventController::class, 'destroy'])->name('events.destroy');

    Route::get('/events/{event}/registrations', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registrations.index');
    Route::get('/events/{event}/registrations/create', [App\Http\Controllers\RegistrationController::class, 'create'])->name('registrations.create');
    Route::post('/events/{event}/registrations', [App\Http\Controllers\RegistrationController::class, 'store'])->name('registrations.store');
    Route::get('/events/{event}/registrations/{registration}', [App\Http\Controllers\RegistrationController::class, 'show'])->name('registrations.show');
    Route::get('/events/{event}/registrations/{registration}/edit', [App\Http\Controllers\RegistrationController::class, 'edit'])->name('registrations.edit');
    Route::put('/events/{event}/registrations/{registration}', [App\Http\Controllers\RegistrationController::class, 'update'])->name('registrations.update');
    Route::delete('/events/{event}/registrations/{registration}', [App\Http\Controllers\RegistrationController::class, 'destroy'])->name('registrations.destroy');
});

// for Calendar
Route::get('/event_calendar', [App\Http\Controllers\EventCalendarController::class, 'event_calendar'])->name('event_calendar');


// Routes for Frontend
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/photos', function () {
    return view('frontend.photos');
});