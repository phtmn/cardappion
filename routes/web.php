<?php

Route::get('/blog', 'Site\BlogController@index')->name('site.blog.index');
Route::get('/blog/{slug}', 'Site\BlogController@show')->name('site.blog.show');

Route::get('/', 'Site\SiteController@home')->name('site');
Route::get('/@/{token}/', 'Site\SiteController@show')->name('site.menu.show'); //perfil
Route::get('/@/{token}/menu', 'Site\SiteController@menu')->name('site.menu.menu');
Route::get('/@/{token}/produto/{id}', 'Site\SiteController@product')->name('site.menu.product');

//  Mudar m para @

// Route::get('produto/{slug}', 'Site\SiteController@produto')->name('produto');
// Route::get('menu/{slug}', 'Site\SiteController@menu')->name('menu.slug');

Route::name('cart.checkout')->get('{token}/checkout','Admin\CartController@checkout');
Route::name('cart.index')->get('/m/{token}/checkout/cart','Admin\CartController@index');
Route::name('cart.add')->post('/m/{token}/checkout/cart','Admin\CartController@add');
Route::name('cart.update')->put('/m/{token}/checkout/cart/{id}','Admin\CartController@update');
Route::name('cart.addCondition')->post('/m/{token}/checkout/cart/conditions','Admin\CartController@addCondition');
Route::name('cart.clearCartConditions')->delete('/m/{token}/checkout/cart/conditions','Admin\CartController@clearCartConditions');
Route::name('cart.details')->get('/m/{token}/checkout/cart/details','Admin\CartController@details');
Route::name('cart.delete')->delete('/m/{token}/checkout/cart/{id}','Admin\CartController@delete');


Route::get('/sale','Admin\SaleController@index')->name('sale.index');
Route::post('/sale','Admin\SaleController@store')->name('sale.store');
Route::put('/sale/{id}','Admin\SaleController@update')->name('sale.update');
Route::get('/sale/{id}', 'Admin\SaleController@show')->name('sale.show');

Route::get('menu/product/{id}', 'Site\SiteController@productDetail')->name('product.detail');

Route::name('admin.menus.add_products')->get('menus/menu-item/{menu_id}/product/{product_id}/adicionar', 'Admin\MenuController@storeProducts');
Route::name('admin.menus.remove_products')->get('menus/menu-item/{menu_id}/product/{product_id}/remover', 'Admin\MenuController@deleteProducts');

Route::name('admin.menus.getproducts')->get('menus/prods/{menu_id}', 'Admin\MenuController@getProducts');
Route::name('admin.menus.getproduct')->get('menus/prod/{menu_id}', 'Admin\MenuController@getProduct');
Route::name('admin.menus.getpromo')->get('menus/promo/{promotion_id}', 'Admin\MenuController@getPromo');



Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

    //Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::get('/', 'PanelController@index')->name('panel.index');


    // Route::resource('promotions', 'PromotionController');
    Route::resource('menus', 'MenuController');
    Route::resource('products', 'ProductsController');

    Route::get('/config/createEdit', 'ConfigController@createEdit')->name('config.createEdit');
    Route::post('/config/createEdit', 'ConfigController@store')->name('config.store');
    Route::put('/config/createEdit', 'ConfigController@update')->name('config.update');

    Route::get('/menu-itens/{id}', 'MenuController@menuItens')->name('menu.menuItens');
    Route::get('/menu-item/menu/{menu}/delete/{id}', 'MenuController@deleteItem')->name('menu.deleteItem');
    Route::get('/menu/share/{id}', 'MenuController@share')->name('menu.share');
    Route::post('/menu/editar-link', 'MenuController@link')->name('menu.link');
    //   Route::post('/menu/sort/itens', 'MenuController@sort')->name('menu.sort');

    Route::get('qrcode/{id}', 'PromotionController@qrCode')->name('promotion.qrCode');

    Route::name('admin.products.activate')->get('products/ativar/{id}', 'ProductsController@activate');
    // Route::name('admin.promotions.activate')->get('promotions/ativar/{id}', 'PromotionController@activate');

    Route::name('admin.menus.activate')->get('menus/ativar/{id}', 'MenuController@activate');
    Route::name('admin.menus.products')->get('menus/menu-item/{menu_id}/adicionar', 'MenuController@addProducts');
});
