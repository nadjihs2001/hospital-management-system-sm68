<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\WebSite\ServiceController;
use App\Http\Controllers\WebSite\PolyclinicController;

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

    // Home Page
    Route::get('/', function () {
        return view('welcome');
    });


    // About Page
    Route::get('/about', function () {
        return view('WebSite.about');
    })->name('about');

    // Services Page
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/service-details/{id}', [ServiceController::class, 'show'])->name('service-details');

    // Doctors Pages
    Route::get('/doctors', function () {
        return view('WebSite.doctors');
    })->name('doctors');

    Route::get('/doctors-detail', function () {
        return view('WebSite.doctors-detail');
    })->name('doctors-detail');

    // Departments Pages
    Route::get('/department', function () {
        return view('WebSite.department');
    })->name('department');

    Route::get('/department-detail', function () {
        return view('WebSite.department-detail');
    })->name('department-detail');

    // Blog Pages
    Route::get('/blog', function () {
        return view('WebSite.blog');
    })->name('blog');

    Route::get('/blog-classic', function () {
        return view('WebSite.blog-classic');
    })->name('blog-classic');

    Route::get('/blog-detail', function () {
        return view('WebSite.blog-detail');
    })->name('blog-detail');

    // polyclinics Pages
    Route::get('/polyclinics', [PolyclinicController::class, 'index'])->name('polyclinics');
    Route::get('/polyclinic-details/{id}', [PolyclinicController::class, 'show'])->name('polyclinic-details');

    Route::get('/shopping-cart', function () {
        return view('WebSite.shopping-cart');
    })->name('shopping-cart');

    Route::get('/checkout', function () {
        return view('WebSite.checkout');
    })->name('checkout');

    // Other Pages
    Route::get('/contact', function () {
        return view('WebSite.contact');
    })->name('contact');

    Route::get('/faq', function () {
        return view('WebSite.faq');
    })->name('faq');

    Route::get('/team', function () {
        return view('WebSite.team');
    })->name('team');

    Route::get('/gallery', function () {
        return view('WebSite.gallery');
    })->name('gallery');

    Route::get('/coming-soon', function () {
        return view('WebSite.coming-soon');
    })->name('coming-soon');

});








