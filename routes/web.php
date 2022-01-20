<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\TryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
// use App\Http\Controllers\Admin\TravelPackageController;
use Illuminate\Support\Facades\Auth;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/details', [DetailsController::class, 'index'])->name('Details');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('Checkout');
Route::get('/success', [SuccessController::class, 'index'])->name('Success');

Route::prefix('admin') // prefix = /admin
    // ->namespace('Admin')
    ->middleware(['auth', 'admin']) // Membuat midlleware untuk mengamankan pages admin
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('travel-package', TravelPackageController::class);
        Route::resource('gallery', GalleryController::class);
    });
Auth::routes(['verify' => true]);

Route::get('/cobaroute', [TryController::class, 'index']);
Route::get('/send-mail', function () {

    Mail::to('newuser@example.com')->send(new MailtrapExample());

    return 'A message has been sent to Mailtrap!';
});
// Auth::routes();
// Auth::routes();
