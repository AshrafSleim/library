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

Route::get('/','pages@index')->name('index');
Route::get('/category/{id}','pages@viewCategory')->name('category');
Route::get('/book/{id}','pages@viewBook')->name('book');
Route::post('/comment/{id}',['uses'=>'pages@addComment','middleware'=>'auth'])->name('comment');
Route::get('/upload',['uses'=>'Upload@index','middleware'=>'roles','roles'=>['admin','users']])->name('upload');
Route::post('/upload',['uses'=>'Upload@upload','middleware'=>'roles','roles'=>['admin','users']])->name('upload.save');

Route::group(['prefix'=>'admin','middleware'=>'roles','roles'=>'admin'],function (){

    Route::resource('users','AdminUser');
    Route::resource('categories','AdminCategory');
});

Auth::routes();

Route::get('/home','pages@index')->name('home');

