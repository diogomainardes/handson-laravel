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

//Route::get('/admin/users/{id}/', 'AdminController');
Route::get('/admin/users/{id}/show', 'AdminController@show')
    ->name('admin.user.show');
Route::get('/admin/users/{id}/edit', 'AdminController@edit');

Route::prefix('admin/users')
    ->middleware(['verifyAge', 'web'])
    ->group(function(){

    Route::get('{id}/show', 'AdminController@show')
        ->name('admin.user.show');
    

});

