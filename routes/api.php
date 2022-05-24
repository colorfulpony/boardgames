<?php

use App\Http\Controllers\Admin\ProductCategory\IndexController as AdminProductCategoryIndexController;
use App\Http\Controllers\Admin\ProductCategory\UpdateController as AdminProductCategoryUpdateController;
use App\Http\Controllers\Admin\ProductCategory\EditController as AdminProductCategoryEditController;
use App\Http\Controllers\Admin\ProductCategory\StoreController as AdminProductCategoryStoreController;
use App\Http\Controllers\Admin\ProductCategory\DeleteController as AdminProductCategoryDeleteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('admin')->group(function() {
//     Route::name('admin.main.')->group(function () {
//         Route::get('/', AdminMainIndexController::class)->name('index');
//     });

//     Route::name('admin.product_categories.')->group(function () {
//         Route::get('/', AdminProductCategoryIndexController::class)->name('index');
//         Route::get('/create', AdminProductCategoryCreateController::class)->name('create');
//         Route::post('/', AdminProductCategoryStoreController::class)->name('store')->middleware('web');
//     });
// });

Route::prefix('admin')->name('admin')->group(function () {
    Route::prefix('product_category')->name('.product_categories')->group(function() {
        Route::patch('/{productCategory}', AdminProductCategoryUpdateController::class)->name('update');
        Route::get('/', AdminProductCategoryIndexController::class)->name('index');
        Route::get('/{productCategory}', AdminProductCategoryEditController::class)->name('edit');
        Route::post('/', AdminProductCategoryStoreController::class)->name('store');
        Route::delete('/{productCategory}', AdminProductCategoryDeleteController::class)->name('delete');
    });
});

// Route::get('/{page}', MainIndexController::class)->where('page', '.*');

// Route::get('home', [HomeController::class, 'index']);
