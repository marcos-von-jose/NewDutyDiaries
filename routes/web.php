<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DiariesController;
use App\Http\Controllers\DocumentationsController;
use App\Http\Controllers\ApprovalRequestController;
use App\Http\Controllers\UsersController;

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

Auth::routes();

Route::get('/', function () {
    return view('front.welcome');
});

// Route::get('/auth-login', 'Auth\LoginController@showLoginForm')->name('auth.login');

Route::get('/not-authorize', function(){
    return view('auth.not-authorize');
})->name('not-authorize');

    Route::middleware('checkRouteAccess')->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::resource('/diaries', DiariesController::class);
    Route::resource('/documentations', DocumentationsController::class);
    Route::resource('/approval_request', ApprovalRequestController::class);
    Route::resource('/users', UsersController::class);

    Route::put('/approval_request/approve/{id}', 'ApprovalRequestController@approve')->name('approval_request.approve');
    Route::put('/approval_request/reject/{id}', 'ApprovalRequestController@reject')->name('approval_request.reject');

});
