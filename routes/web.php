<?php

Auth::routes();

//web routes
Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/', 'HomeController@list')->name('list');
Route::get('catalogo/{slug}', 'CommerceController@commerce');
Route::get('region/{name}', 'HomeController@region');
Route::get('contacto/{slug}', 'CommerceController@contact');
Route::get('listado/{slug}', 'CommerceController@shop');
Route::get('listado-categoria/{slug}/{category_id}', 'CommerceController@shopCategory');
Route::get('producto/{slug}/{product_id}', 'ProductController@product');
Route::post('add/{product_id}', 'ProductController@addcart');
Route::get('compra/{slug}', 'ProductController@cart');
Route::get('borrar/{id}/{idProduct}', 'ProductController@delItems');
Route::post('checkout', 'ProductController@checkout');
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@post');

Route::post('mailcustomers/{id}', 'CommerceController@MailCustomer')->name('mailcustomers');
Route::post('mailclient', 'HomeController@MailClient')->name('mailclient');

Route::get('terminos', function () {
    return view('web.parts._term');
});
Route::get('politicas', function () {
    return view('web.parts._politices');
});
//---------------------
//Admin CeliacosMendoza
Route::middleware(['auth','UserType'])->group(function () {
    Route::get('admin/', 'AdminCeliac\DashboardController@index');
    Route::resource('admin/user', 'AdminCeliac\UserController');
    Route::resource('admin/categorias', 'AdminCeliac\CategoriesController');
});
//-------------------------

//Admin Company
Route::middleware(['auth'])->group(function () {
    Route::get('cliente-perfil', 'AdminClient\DashboardController@dashboard');
    Route::get('cliente-perfil/activos', 'AdminClient\DashboardController@dashboard');
    Route::get('cliente-perfil/desactivos', 'AdminClient\DashboardController@dashboard');
    Route::resource('cliente-perfil/updatePerson', 'AdminClient\PersonController', ['only' => ['update']]);
    Route::resource('cliente-perfil/updateCommerce', 'AdminClient\CommerceController', ['only' => ['update']]);
    Route::resource('cliente-perfil/product', 'AdminClient\ProductController', ['except' => ['show']]);
        Route::get('cliente-perfil/available/{id}', 'AdminClient\ProductController@available')->name('available');
        Route::get('cliente-perfil/unavailable/{id}', 'AdminClient\ProductController@unavailable')->name('unavailable');
    Route::get('cliente-perfil/ventas', 'AdminClient\PurchaseController@list');
    Route::get('cliente-perfil/mensajes', 'AdminClient\MessageController@listMessage');
    Route::get('cliente-perfil/leer-mensaje/{id}', 'AdminClient\MessageController@readMessage');
    Route::get('cliente-perfil/responder-mensaje/{id}', 'AdminClient\MessageController@responsMessage');
    Route::delete('cliente-perfil/delete/{id}', 'AdminClient\MessageController@deleteMessage')->name('deletemessage');
    Route::post('cliente-perfil/response/{id}', 'AdminClient\MessageController@responsMessageCliente')->name('responsMessageCliente');
    Route::get('admin/blog/list', 'BlogController@list')->name('blog.list');
    Route::get('admin/blog/create', 'BlogController@create')->name('blog.create');
    Route::post('admin/blog/store', 'BlogController@store')->name('blog.store');
/*    Route::post('admin/blog/edit/{id}', 'BlogController@edit')->name('blog.edit');
    Route::post('admin/blog/delete/{id}', 'BlogController@delete')->name('blog.delete');*/
});
//---------------------



