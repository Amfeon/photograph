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
Route::get('/',function (){
    return view('welcome');
});
Route::get('/admin',function (){
    return view('back-end.admin');
});
Route::get('/slider', 'ImagesController@getImage');
Route::POST('/store','ImagesController@index');
Route::GET('/show-slider','ImagesController@getImage');
Route::POST('/show-slider/delete','ImagesController@delete');

    

