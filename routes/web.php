<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ApplicationAdminController;
use App\Http\Controllers\Admin\ArticleAdminController;
use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\PartnerAdminController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Admin\ServiceAdminController;
use App\Http\Controllers\Admin\SettingAdminController;
use App\Http\Controllers\Admin\UploadImageController;
use App\Http\Controllers\Admin\UplodeDesignAdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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



Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize']],
    function () {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', function () {
            return View::make('welcome');
        });

        Route::get(LaravelLocalization::transRoute('routes.about'), [AboutController::class, 'index']);

        Route::get(LaravelLocalization::transRoute('routes.services'), [ServiceController::class, 'index']);
        // Route::get(LaravelLocalization::transRoute('routes.services').'/{id}', [ServiceController::class, 'show']);

        Route::get(LaravelLocalization::transRoute('routes.applications'), [ApplicationController::class, 'index']);
        Route::get(LaravelLocalization::transRoute('routes.applications').'/{id}', [ApplicationController::class, 'show']);

        Route::get(LaravelLocalization::transRoute('routes.posts'), [PostController::class, 'index']);
        Route::get(LaravelLocalization::transRoute('routes.posts').'/{id}', [PostController::class, 'show']);

        Route::get(LaravelLocalization::transRoute('routes.articles'), [ArticleController::class, 'index']);
        Route::get(LaravelLocalization::transRoute('routes.articles').'/{id}', [ArticleController::class, 'show']);

        Route::get(LaravelLocalization::transRoute('routes.contacts'), [ContactController::class, 'index']);

        //,...
    });

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [IndexAdminController::class, 'index']);

    Route::resource('services', ServiceAdminController::class);
    Route::resource('applications', ApplicationAdminController::class);
    Route::resource('posts', PostAdminController::class);
    Route::resource('articles', ArticleAdminController::class);
    Route::resource('partners', PartnerAdminController::class);
    Route::resource('settings', SettingAdminController::class);

    Route::get('design', [UplodeDesignAdminController::class, 'index'])->name('design.index');
    Route::post('design', [UplodeDesignAdminController::class, 'save'])->name('design.save');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
