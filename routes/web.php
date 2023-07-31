<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiariesController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\ApprovalRequestController;
use App\Http\Controllers\UsersController;

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
    return view('front.welcome');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::Resource('/diaries', DiariesController::class);
Route::Resource('/documentations', DocumentationController::class);
Route::Resource('/approval_request', ApprovalRequestController::class);
Route::Resource('/users', UsersController::class);



