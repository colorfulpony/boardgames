<?php

use App\Http\Controllers\Admin\Main\IndexController as AdminMainIndexController;
use App\Http\Controllers\Admin\ProductCategory\IndexController as AdminProductCategoryIndexController;
use App\Http\Controllers\Admin\ProductCategory\CreateController as AdminProductCategoryCreateController ;
use App\Http\Controllers\Admin\ProductCategory\EditController;
use App\Http\Controllers\Admin\ProductCategory\StoreController as AdminProductCategoryStoreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Middleware\VerifyCsrfToken;
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

Auth::routes();


Route::get('/{page}', MainIndexController::class)->where('page', '.*');

// Route::get('/home', AdminProductCategoryIndexController::class);




// Route::middleware(VerifyCsrfToken::class)->prefix('admin')->group(function() {
//     Route::name('admin.main.')->group(function () {
//         Route::get('/', AdminMainIndexController::class)->name('index');
//     });

//     Route::name('admin.product_categories.')->group(function () {
//         Route::get('/', AdminProductCategoryIndexController::class)->name('index');
//         Route::get('/create', AdminProductCategoryCreateController::class)->name('create');
//         Route::post('/', AdminProductCategoryStoreController::class)->name('store')->middleware('web');
//     });
// });



