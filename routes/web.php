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

Route::get('/', 'page_controller@index');

Route::get('/beheer', 'page_controller@beheer');

Route::get('/beheer/{id}', 'db_commands@delete_wish');

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/inloggen', function () {
    return view('inloggen');
});

Route::get('/registreren', function () {
    return view('registreren');
});

Route::post('/wishlist', 'db_commands@create_wish');

Route::post('/inloggen', 'user_controller@login');

Route::post('/registreren', 'user_controller@register');

