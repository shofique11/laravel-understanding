<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController as OrderController;
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
    return view('welcome');
});
Route::get('/stripe-payment', [OrderController::class, 'stripeProcessOrder']);
Route::get('/paypal-payment', [OrderController::class, 'paypalProcessOrder']);
