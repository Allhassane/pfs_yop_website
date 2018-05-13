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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/page/{slug}', 'HomeController@page')->name('page');

Route::get('/articles', 'HomeController@post')->name('posts');
Route::get('/articles/{slug}', 'HomeController@show')->name('posts.show');

Route::get('/partenaires', 'HomeController@partenaire')->name('partenaire');

Route::get('/phototheque', 'HomeController@album')->name('album');
Route::get('/phototheque/album/{slug}', 'HomeController@photo')->name('photo');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact/send', 'HomeController@contactSend')->name('contact.send');

//Route::group(['prefix' => 'phototheque'], function(){
//    Route::get('/', 'HomeController@photo')->name('photo.list');
//    Route::get('/{slug}', 'HomeController@photoDetail')->name('photo.show');
//});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
