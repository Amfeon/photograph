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

    Route::get('/admin', 'HomeController@homeAdmin');
    Route::GET('/admin/slider/edit','ImagesController@edit_slider')->name('slider.edit');
    Route::GET('/add-slider',function (){        return view('back-end.putImage');    });
    Route::POST('/admin/slider/store','ImagesController@index')->name('slider.store');
    Route::POST('/admin/slider/delete','ImagesController@delete')->name('slider.delete');
    /*GAllery*/
    Route::GET('/admin/gallery/edit/{id}','GalleryController@editGallery')->where('id','[0-9]+')->name('gallery.edit');
    Route::GET('/admin/gallery/show','GalleryController@showGallery')->name('gallery.show');
    Route::POST('/admin/gallery/store','GalleryController@storeUpdate')->name('gallery.store');
    Route::POST('/admin/gallery/create','GalleryController@create')->name('gallery.create');
    Route::GET('/admin/gallery/delete/{id}', 'GalleryController@delete')->where('id','[0-9]+')->name('gallery.delete');
    Route::POST('/ajax-load-image', 'GalleryController@ajaxLoad');
    Route::POST('/options-update', 'HomeController@optionsUpdate');

    Route::GET('/admin/show-applications','MailController@getMails')->name('applications.show');
    Route::POST('/delete-images','ImagesController@deleteImageGallery')->name('delete-images');
});
Route::POST('/contact', 'MailController@store')->name('contact');
Route::GET('/photo-session/{id}','GalleryController@photoSession')->where('id','[0-9]+');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ImagesController@getImage');


