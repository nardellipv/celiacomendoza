<?php

Auth::routes();

//web routes
Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/', 'HomeController@list')->name('list');
Route::get('catalogo/{id}', 'CommerceController@commerce');
Route::get('contacto/{id}', 'CommerceController@contact');
Route::get('listado/{id}', 'CommerceController@shop');
Route::get('listado-categoria/{id}/{category_id}', 'CommerceController@shopCategory');
Route::get('producto/{id}/{product_id}', 'ProductController@product');
Route::post('add/{product_id}', 'ProductController@addcart');
Route::get('compra/{id}', 'ProductController@cart');
Route::get('borrar/{id}/{idProduct}', 'ProductController@delItems');
Route::post('checkout', 'ProductController@checkout');

Route::post('mailcustomers', 'CommerceController@MailCustomer')->name('mailcustomers');
Route::post('mailclient', 'HomeController@MailClient')->name('mailclient');

//---------------------

