<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\PortfolioHomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PriceListController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\AdminManageController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
Route::get('/cara-order', [OrderController::class, 'index'])->name('order');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::get('/portfolio', [PortfolioHomeController::class, 'index'])->name('portfolio');
Route::get('/admin', [AdminDashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/product', ProductAdminController::class);
Route::resource('admin/gallery', GalleryController::class);
Route::resource('admin/price_list', PriceListController::class);
Route::resource('admin/client', ClientController::class);
Route::resource('admin/testimonial', TestimonialController::class);
Route::resource('admin/portfolio', PortfolioController::class);
Route::resource('admin/list_admin', AdminManageController::class);

Auth::routes();
