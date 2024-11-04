<?php

use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Customer\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('{prefix}')->controller(CustomerController::class)->middleware('auth')->group(function () {
    Route::get('/messages/{id?}', 'user_messages')->name('user.messages');
    // Route::get('/message/{id}', 'user_message_body')->name('user.message.body');
});

Route::controller(CustomerController::class)->middleware('auth', 'customer')->group(function () {
    Route::get('/customer/wishlist', 'wishlist')->name('customer.wishlist');
    Route::get('/customer/appointment', 'appointment')->name('customer.appointment');
    Route::get('/customer/become-an-agent', 'become_an_agent')->name('customer.become_an_agent');



    Route::get('/customer/appointment/status/{id}',  [AgentController::class, 'appointment_delete'])->name('customer.appointment.delete');
    Route::get('/customer/appointment/details/{id}/{type}',  [AgentController::class, 'appointment_view_details'])->name('customer.appointment.view_details');

});