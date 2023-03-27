<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\PostAdminController;

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


// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// {


// 	Route::get('about',function(){
// 		return View::make('about');
// 	});
// });

Route::group([
	'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize' ]], 
    function () {

		/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
		Route::get('/', function()
		{
			return View::make('welcome');
		});    	

	    Route::get(LaravelLocalization::transRoute('routes.about'), function () {
	        return view('about');
	    });

		Route::get(LaravelLocalization::transRoute('routes.posts'), [PostController::class, 'index']);
	    Route::get(LaravelLocalization::transRoute('routes.posts').'/{id}', [PostController::class, 'show']);

    //,...
});




Route::get('/', function () {
    return view('welcome');
});


// Route::get('posts/',     [PostController::class, 'index']);
// Route::get('posts/{id}', [PostController::class, 'show']);




Route::prefix('admin')->group(function () {
    Route::get('/', [IndexAdminController::class, 'index']);

	Route::resource('posts', PostAdminController::class);

})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
