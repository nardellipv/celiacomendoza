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

Route::post('mailcustomers/{id}', 'CommerceController@MailCustomer')->name('mailcustomers');
Route::post('mailclient', 'HomeController@MailClient')->name('mailclient');

Route::get('terminos', function () {
    return view('web.parts._term');
});
Route::get('politicas', function () {
    return view('web.parts._politices');
});
//---------------------

//Admin Company
Route::middleware(['auth'])->group(function () {
    Route::get('cliente-perfil', 'AdminClient\DashboardController@dashboard');
    Route::get('cliente-perfil/activos', 'AdminClient\DashboardController@dashboard');
    Route::get('cliente-perfil/desactivos', 'AdminClient\DashboardController@dashboard');
    Route::resource('cliente-perfil/updatePerson', 'AdminClient\PersonController', ['only' => ['update']]);
    Route::resource('cliente-perfil/updateCommerce', 'AdminClient\CommerceController', ['only' => ['update']]);
    Route::resource('cliente-perfil/product', 'AdminClient\ProductController', ['except' => ['show']]);
        Route::get('cliente-perfil/available/{id}', 'AdminClient\ProductController@reactive')->name('available');
        Route::get('cliente-perfil/unavailable/{id}', 'AdminClient\ProductController@reactive')->name('unavailable');
    Route::get('cliente-perfil/mensajes', 'AdminClient\MessageController@listMessage');
    Route::get('cliente-perfil/leer-mensaje/{id}', 'AdminClient\MessageController@readMessage');
    Route::get('cliente-perfil/responder-mensaje/{id}', 'AdminClient\MessageController@responsMessage');
    Route::delete('cliente-perfil/delete/{id}', 'AdminClient\MessageController@deleteMessage')->name('deletemessage');
    Route::post('cliente-perfil/response/{id}', 'AdminClient\MessageController@responsMessageCliente')->name('responsMessageCliente');
});
//---------------------

