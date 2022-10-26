<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/documentation', [App\Http\Controllers\PublicPagesController::class, 'viewDocPage'])->name('documentation');
Route::get('/about-us', [App\Http\Controllers\PublicPagesController::class, 'viewAbout'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\PublicPagesController::class, 'viewContactus'])->name('contact-us');
Route::get('/services', [App\Http\Controllers\PublicPagesController::class, 'viewServiceDetails'])->name('services');
Route::get('/clients', [App\Http\Controllers\PublicPagesController::class, 'viewClients'])->name('clients');

Route::get('/capabilities-details', [App\Http\Controllers\PublicPagesController::class, 'viewServiceDetails'])->name('capabilities-details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
