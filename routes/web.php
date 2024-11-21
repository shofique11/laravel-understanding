<?php

use App\Facades\Greeting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

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
Route::get('/faceade', function () {
    Cache::put('name','shofique',2);
    $value = Cache::get('name');
    echo $value;
    Log::info('Cache has been updated!');
});
Route::get('/greeting', function () {
  echo Greeting::sayHello("Shofique");
});