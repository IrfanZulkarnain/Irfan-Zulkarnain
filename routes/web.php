<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Models\User;




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

/**
 * Basic Page
 */
Route::get('/', [PageController::class, 'landingPage'])->name('landingPage');
Route::get('/about', [PageController::class, 'aboutPage'])->name('about');
Route::get('/contactus', [PageController::class, 'contactUsPage'])->name('contactUs');
Route::get('/FAQ', [PageController::class, 'FAQ'])->name('FAQ');
Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');

Route::group(['prefix' => 'accounts'], function () {
    Route::post('/logout', [AccountController::class, 'logout'])->name('accounts.logout');
    Route::post('/login', [AccountController::class, 'login'])->name('accounts.login');
});
/**
 * Login and Logout pages
 */
Route::group(['prefix' => 'pages'], function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');
    Route::get('/login', [UserController::class, 'login'])->name('users.login');    //pages login
});

/**
 * BOOKING
 */
Route::group(['prefix' => 'bookings'], function () {
    // Route::get('url', [controllerName::class, 'method'])->name('obj.method');
    Route::get('/', [BookingController::class, 'index'])->name('bookings.index');               // Booking Index
    Route::get('/owner', [BookingController::class, 'indexOwner'])->name('bookingsOwner.index');     // Booking Index OWNER
    Route::get('/create', [BookingController::class, 'create'])->name('bookings.create');       // Booking CREATE
    Route::get('/{id}/show', [BookingController::class, 'show'])->name('bookings.show');        // Booking Show
    Route::get('/{id}/myCustomer', [BookingController::class, 'showOwner'])->name('bookingsOwner.show');   // Booking Show OWNER
    Route::get('/{id}/edit', [BookingController::class, 'edit'])->name('bookings.edit');        // Booking EDIT
    Route::post('/', [BookingController::class, 'store'])->name('bookings.store');              // store
    Route::patch('/{id}', [BookingController::class, 'update'])->name('bookings.update');       // update
    Route::delete('/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');    // destroy
});

/**
 * PAYMENT
 */
Route::group(['prefix' => 'payments'], function () {
    // Route::get('url', [controllerName::class, 'method'])->name('obj.method');
    Route::get('/', [PaymentController::class, 'index'])->name('payments.index');               // Payment Index
    Route::get('/create', [PaymentController::class, 'create'])->name('payments.create');       // Payment CREATE
    Route::get('/{id}/edit', [PaymentController::class, 'edit'])->name('payments.edit');        // Payment EDIT
    Route::post('/', [PaymentController::class, 'store'])->name('payments.store');              // store
    Route::patch('/{id}', [PaymentController::class, 'update'])->name('payments.update');       // update
    Route::delete('/{id}', [PaymentController::class, 'destroy'])->name('payments.destroy');    // destroy
});

/**
 * PROPERTY
 */
Route::group(['prefix' => 'properties'], function () {
    // Route::get('url', [controllerName::class, 'method'])->name('obj.method');
    Route::get('/', [PropertyController::class, 'index'])->name('properties.index');             // Property Index untuk cari
    Route::get('/create', [PropertyController::class, 'create'])->name('properties.create');     // Property CREATE
    Route::get('/{id}/show', [PropertyController::class, 'show'])->name('properties.show');           // Property SHOW
    Route::get('/{user_id}/properties', [PropertyController::class, 'list'])->name('properties.list');// Property untuk owner
    Route::get('/{id}/edit', [PropertyController::class, 'edit'])->name('properties.edit');      // Property EDIT
    Route::post('/', [PropertyController::class, 'store'])->name('properties.store');            // store
    Route::patch('/{id}', [PropertyController::class, 'update'])->name('properties.update');     // update
    Route::delete('/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');  // destroy
});

/**
 * USER
 */
Route::group(['prefix' => 'users'], function () {
    // Route::get('url', [controllerName::class, 'method'])->name('obj.method');
    Route::get('/', [UserController::class, 'index'])->name('users.index');                     // User Index
    Route::get('/create', [UserController::class, 'create'])->name('users.create');             // User CREATE
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');              // USER EDIT
    Route::post('/', [UserController::class, 'store'])->name('users.store');                    // store
    Route::patch('/{id}', [UserController::class, 'update'])->name('users.update');             // update
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');          // destroy
});


