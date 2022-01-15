<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\TryController;
use App\Http\Controllers\Admin\DashboardController;
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
Route::get('/home', [HomeController::class, 'index'])->name('Home');
Route::get('/details', [DetailsController::class, 'index'])->name('Details');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('Checkout');
Route::get('/success', [SuccessController::class, 'index'])->name('Success');
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
    });
Route::get('/cobaroute', [TryController::class, 'index']);
