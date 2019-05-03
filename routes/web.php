<?php

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

Route::prefix('/')->group(function () {
    Route::get('/','Frontend\\PagesController@getindex')->name('index');
    Route::get('/gioi-thieu.html','Frontend\\PagesController@getAbout')->name('about');
    Route::get('/lien-he.html','Frontend\\PagesController@getContact')->name('contact');

    // ProductsController
    Route::get('/danh-sach-san-pham','Frontend\\ProductController@getMenuproducts')->name('menu_products');
    Route::get('/{slug}.html','Frontend\\ProductController@getDetailProducts')->name('detail_product');
    Route::get('/kiem-tra','Frontend\\ProductController@getCheckout')->name('checkout');
    Route::post('/gio-hang-update','Frontend\\ProductController@postSessionCart')->name('update_giohang');
    Route::get('/thanh-toan','Frontend\\ProductController@getPay')->name('pay');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::prefix('/cart')->group( function () {
    Route::get('/{act}/{idsp}/{qty?}','Frontend\\ProductController@handleCart')->name('cart');
    // Route::post('/delivery', 'LaptopController@getDelivery');

});
