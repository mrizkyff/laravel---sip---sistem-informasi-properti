<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AssetsController;

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
    $title = 'SIP - Sistem Informasi Properti';
    $navigation = 'Homepage';
    return view('welcome', ['title' => $title, 'navigation' => $navigation]);
});

Route::resource('customers', CustomersController::class);
Route::resource('assets', AssetsController::class);