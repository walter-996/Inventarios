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

Route::prefix('inventarios')->group(function() {
    Route::get('/', 'InventariosController@index');
});
//php artisan module:migrate Inventarios
//php artisan module:make-migration create_posts_table Inventarios