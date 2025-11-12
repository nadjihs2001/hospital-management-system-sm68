<?php


use App\Http\Controllers\WebSite\WebsiteController;
use Illuminate\Support\Facades\Auth;
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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
    Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
    Route::get('/services', [WebsiteController::class, 'services'])->name('website.services');
    Route::get('/structures', [WebsiteController::class, 'structures'])->name('website.structures');
    Route::get('/news', [WebsiteController::class, 'news'])->name('website.news');

});
