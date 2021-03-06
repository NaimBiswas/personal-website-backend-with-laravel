<?php

use App\Http\Controllers\HeaderControllerController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('header', [HeaderControllerController::class, 'index'])->name('header');
    Route::post('header/store', [HeaderControllerController::class, 'store'])->name('header.store');
    Route::post('header/images/store', [HeaderControllerController::class, 'imagesStore'])->name('header.images.store');
});
