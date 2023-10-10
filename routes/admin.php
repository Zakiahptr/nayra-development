<?php

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\InboxController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\WorkflowController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ResidenceController;
use App\Http\Controllers\Admin\TestimonialController;

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

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::prefix('perumahan')->controller(ResidenceController::class)->name('residence.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/tambah', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{residence:slug}/edit', 'edit')->name('edit');
            Route::patch('/{residence:slug}/update', 'update')->name('update');
            Route::get('/{residence:slug}/detail', 'show')->name('detail');
            Route::delete('/{residence:slug}', 'destroy')->name('destroy');
        });

        Route::prefix('tipe-perumahan')->controller(TypeController::class)->name('type.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/tambah', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{type}/edit', 'edit')->name('edit');
            Route::patch('/{type}/update', 'update')->name('update');
            Route::get('/{type}/detail', 'show')->name('detail');
            Route::delete('/{type}', 'destroy')->name('destroy');
        });

        Route::prefix('artikel')->controller(ArticleController::class)->name('article.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/tambah', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{article:slug}/edit', 'edit')->name('edit');
            Route::patch('/{article:slug}/update', 'update')->name('update');
            Route::get('/{article:slug}/detail', 'show')->name('detail');
            Route::delete('/{article:slug}', 'destroy')->name('destroy');
        });

        Route::prefix('kontak-masuk')->controller(InboxController::class)->name('inbox.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{inbox}/detail', 'show')->name('detail');
            Route::delete('/{inbox}', 'destroy')->name('destroy');
        });

        Route::prefix('tentang-kami')->group(function () {
            Route::prefix('keunggulan')->controller(ServiceController::class)->name('service.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/tambah', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{service}/edit', 'edit')->name('edit');
                Route::patch('/{service}/update', 'update')->name('update');
                Route::delete('/{service}', 'destroy')->name('destroy');
            });

            Route::prefix('alur-kerja')->controller(WorkflowController::class)->name('workflow.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/tambah', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{workflow}/edit', 'edit')->name('edit');
                Route::patch('/{workflow}/update', 'update')->name('update');
                Route::delete('/{workflow}', 'destroy')->name('destroy');
            });

            Route::prefix('testimonial')->controller(TestimonialController::class)->name('testimonial.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/tambah', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{testimonial}/edit', 'edit')->name('edit');
                Route::patch('/{testimonial}/update', 'update')->name('update');
                Route::delete('/{testimonial}', 'destroy')->name('destroy');
            });

            Route::prefix('galeri')->controller(GalleryController::class)->name('gallery.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/tambah', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::delete('/{gallery}', 'destroy')->name('destroy');
            });
        });
    });
});

