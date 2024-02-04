<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MarketingController;

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

Route::controller(MarketingController::class)->group(function() {
    Route::get('/', 'home')->name('marketing.home');
    Route::get('/benefits-of-raw', 'benefits')->name('marketing.benefits');
    Route::get('/transitioning-feeding', 'feeding')->name('marketing.feeding');
    Route::get('/faq', 'faq')->name('marketing.faq');
    Route::get('/about-us', 'about')->name('marketing.about');
});

Route::controller(ContactUsController::class)->group(function() {
    Route::get('/contact-us', 'index')->name('marketing.contact');
    Route::post('/contact-us', 'send')->name('marketing.contact.send');
});

Route::controller(CatalogueController::class)->group(function() {
    Route::get('/products', 'index')->name('catalogue.index');
    Route::get('/products/pure-proteins', 'pureProteins')->name('catalogue.pure-proteins');
    Route::get('/products/gourmet-meals', 'gourmetMeals')->name('catalogue.gourmet-meals');
    Route::get('/products/dog-treats', 'dogTreats')->name('catalogue.dog-treats');
    Route::get('/products/custom-food', 'customFood')->name('catalogue.custom-food');
    Route::get('/products/{slug}', 'view')->name('catalogue.view-product');
});

Route::controller(CartController::class)->group(function() {
    Route::get('/cart', 'index')->name('shop.cart')->middleware(['auth']);
});

Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
