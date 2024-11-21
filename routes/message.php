<?php

use App\Http\Controllers\MessageDeliverController;
use Illuminate\Support\Facades\Route;

Route::get('/email', [MessageDeliverController::class, 'sendEmail']);
Route::get('/sms', [MessageDeliverController::class, 'sendSMS']);
?>