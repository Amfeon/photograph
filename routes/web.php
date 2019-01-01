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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();
Route::group(['middleware'=> 'auth'],function(){
    Route::get('/admin',function (){
        return view('back-end.admin');
    });
    Route::POST('/store','ImagesController@index');
    Route::GET('/show-slider','ImagesController@getImage');
    Route::GET('/edit-slider','ImagesController@edit_slider');
    Route::GET('/add-slider',function (){
        return view('back-end.putImage');
    });
    Route::GET('/edit-gallery/{id}','GalleryController@editGallery');
    Route::POST('/edit-gallery/','GalleryController@storeUpdate');
    Route::POST('/create-gallery','GalleryController@create');
    Route::POST('/show-slider/delete','ImagesController@delete');
    Route::GET('/delete-gallery/{id}', 'GalleryController@delete');
    Route::POST('/ajax-load-image', 'GalleryController@ajaxLoad');
    Route::get('/slider', 'ImagesController@getImage');
    Route::GET('/show-galleries','GalleryController@showGallery');
});
Route::POST('/contact', 'MailController@store')->name('contact');
Route::GET('photo-session/{id}','GalleryController@photoSession');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ImagesController@getImage');
