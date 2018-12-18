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
Route::get('/','ImagesController@getImage');
Route::get('/admin',function (){
    return view('back-end.admin');
});
Route::get('/slider', 'ImagesController@getImage');
Route::POST('/store','ImagesController@index');
Route::GET('/show-slider','ImagesController@getImage');
Route::GET('/edit-slider','ImagesController@edit_slider');
Route::GET('/add-slider',function (){
    return view('back-end.putImage');
});
Route::POST('/show-slider/delete','ImagesController@delete');

    

