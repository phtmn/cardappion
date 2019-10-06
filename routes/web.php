<?php

Route::get('/', 'Site\SiteController@home')->name('site');
Route::name('site.menu.show')->get('/m/{token}', 'Site\SiteController@show');

Route::get('promo/{slug}', 'Site\SiteController@promocao')->name('promo');
Route::get('menu/{slug}', 'Site\SiteController@menu')->name('menu.slug');

Route::get('/m/{slug}/{id}','Site\SiteController@detalhe_promocao')->name('detalhe.promocao');

// Route::get('menu/product/{id}', 'Site\SiteController@productDetail')->name('product.detail');

Route::name('admin.menus.add_products')->get('menus/menu-item/{menu_id}/product/{product_id}/adicionar', 'Admin\MenuController@storeProducts');
Route::name('admin.menus.remove_products')->get('menus/menu-item/{menu_id}/product/{product_id}/remover', 'Admin\MenuController@deleteProducts');

Route::name('admin.menus.getproducts')->get('menus/prods/{menu_id}', 'Admin\MenuController@getProducts');
Route::name('admin.menus.getproduct')->get('menus/prod/{menu_id}', 'Admin\MenuController@getProduct');
Route::name('admin.menus.getpromo')->get('menus/promo/{promotion_id}', 'Admin\MenuController@getPromo');




Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

  Route::get('/', 'DashboardController@index')->name('dashboard.index');

  Route::resource('promotions', 'PromotionController');
  Route::resource('menus', 'MenuController');
  Route::resource('products', 'ProductsController');

  Route::get('/config/createEdit', 'ConfigController@createEdit')->name('config.createEdit');
  Route::post('/config/createEdit', 'ConfigController@store')->name('config.store');

  Route::get('/menu-itens/{id}', 'MenuController@menuItens')->name('menu.menuItens');
  Route::get('/menu-item/menu/{menu}/delete/{id}', 'MenuController@deleteItem')->name('menu.deleteItem');
  Route::get('/menu/share/{id}', 'MenuController@share')->name('menu.share');

  Route::get('qrcode/{id}', 'PromotionController@qrCode')->name('promotion.qrCode');



  Route::name('admin.products.activate')->get('products/ativar/{id}', 'ProductsController@activate');

  Route::name('admin.promotions.activate')->get('promotions/ativar/{id}', 'PromotionController@activate');

  Route::name('admin.menus.activate')->get('menus/ativar/{id}', 'MenuController@activate');
  Route::name('admin.menus.products')->get('menus/menu-item/{menu_id}/adicionar', 'MenuController@addProducts');
});
