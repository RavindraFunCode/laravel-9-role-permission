<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'] ], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::group(['name' => 'users'], function() {
        Route::post('/updates', [UserController::class, 'updates'])->name('user.updates');
        Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::get('/', [UserController::class, 'datatables'])->name('user.datatables');
    });

    Route::resource('products', ProductController::class);
});