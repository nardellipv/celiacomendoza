<?php

Auth::routes();

//web routes
Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/', 'HomeController@list')->name('list');
Route::get('catalogo/{id}', 'CommerceController@commerce');

//---------------------

