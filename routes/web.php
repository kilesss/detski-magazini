<?php

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

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('index');
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
        Route::get('/',[\App\Http\Controllers\Admin\IndexController::class, 'index'] )->name('index');
        Route::get('shops/{id?}',[\App\Http\Controllers\Admin\ShopsController::class, 'shops'] )->name('shops');
        Route::post('shops',[\App\Http\Controllers\Admin\ShopsController::class, 'shopsSubmit'] )->name('shops');
        Route::get('local-shops/{id}/{json?}',[\App\Http\Controllers\Admin\ShopsController::class, 'localShops'] )->name('local-shops');
        Route::post('local-shops/{id}',[\App\Http\Controllers\Admin\ShopsController::class, 'localShopsSubmit'] )->name('local-shops');

        Route::get('categories',[\App\Http\Controllers\Admin\CategoriesController::class, 'categories'] )->name('categories');
        Route::post('categories',[\App\Http\Controllers\Admin\CategoriesController::class, 'categoriesSubmit'] )->name('categories');
        Route::get('categories/{id}',[\App\Http\Controllers\Admin\CategoriesController::class, 'categoriesPhysical'] )->name('categories');
        Route::post('categories/{id}',[\App\Http\Controllers\Admin\CategoriesController::class, 'categoriesPhysicalSubmit'] )->name('categories');
        Route::get('categoriesMappingProducts',[\App\Http\Controllers\Admin\CategoriesController::class, 'categoriesMappingProducts'] )->name('categoriesMappingProducts');
        Route::post('categoriesMappingProducts',[\App\Http\Controllers\Admin\CategoriesController::class, 'categoriesMappingProductsUpdate'] )->name('categoriesMappingProducts');


        Route::get('attributes',[\App\Http\Controllers\Admin\AttributesController::class, 'attributes'] )->name('attributes');
        Route::post('attributes',[\App\Http\Controllers\Admin\AttributesController::class, 'attributesSubmit'] )->name('attributes');
        Route::get('getAttributesValues/{id}',[\App\Http\Controllers\Admin\AttributesController::class, 'getAttributesValues'] )->name('attributes');
        Route::get('deleteAttributesValues/{id}',[\App\Http\Controllers\Admin\AttributesController::class, 'deleteAttributesValues'] )->name('attributes');
        Route::get('products-categorised',[\App\Http\Controllers\Admin\ProductCategorisedController::class, 'productsCategorised'] )->name('products-categorised');
        Route::post('products-categorised',[\App\Http\Controllers\Admin\ProductCategorisedController::class, 'productsCategorisedSubmit'] )->name('products-categorised');
        Route::get('productParsing',[\App\Http\Controllers\Admin\ProductCategorisedController::class, 'productParsing'] )->name('productParsing');
        Route::post('downloadProducts',[\App\Http\Controllers\Admin\ProductCategorisedController::class, 'downloadProducts'] )->name('downloadProducts');
        Route::post('downloadProductsList',[\App\Http\Controllers\Admin\ProductCategorisedController::class, 'downloadProductsList'] )->name('downloadProductsList');


//TODO da se napravi menu koeto da izpylnqva skriptovete i da se triqt flagovete za novi produti po magazini (ili da se napravi pri izpylnenie na skripta da trie flagovete pyrvo)
//TODO da se napravi funkcionalnost da se filtrirat stoki po magazin (moje v kategoriqta da se sloji menu v lqvo s kategoriite i pri klik da filtrira)

    });
});


Auth::routes();

Route::get('/home', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');
Route::get('/category/{id}/{page?}/{filter?}/{shopId?}', [\App\Http\Controllers\Front\CategoriesController::class, 'getCategory'])->name('category');
Route::post('/search/{page?}/{filter?}', [\App\Http\Controllers\Front\CategoriesController::class, 'postSearch'])->name('search');
Route::get('/searching/{string?}{page?}/{filter?}', [\App\Http\Controllers\Front\CategoriesController::class, 'getSearch'])->name('searching');
Route::get('/product/{id}', [\App\Http\Controllers\Front\ProductController::class, 'getProduct'])->name('product');

Route::post('/updateProductId', [\App\Http\Controllers\Front\ProductController::class, 'updateProductId'])->name('updateProductId');
