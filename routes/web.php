<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\AboutController;
use App\Http\Controllers\Guest\ArticleController;
use App\Http\Controllers\Guest\ContactController;
use App\Http\Controllers\Guest\ResidenceController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::prefix('perumahan')->controller(ResidenceController::class)->group(function () {
    Route::get('/', 'residence')->name('residence');
    Route::get('/{residence}', 'detail')->name('residence.detail');
});

Route::prefix('artikel')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'article')->name('article');
    Route::get('/{article}', 'detail')->name('article.detail');
});

Route::get('/tentang-kami', [AboutController::class, 'about'])->name('about');

Route::prefix('kontak')->controller(ContactController::class)->group(function () {
    Route::get('/', 'contact')->name('contact');
    Route::post('/store', 'store')->name('contact.store');
});
