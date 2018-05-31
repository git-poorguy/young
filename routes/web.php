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


//Route::get('/', function () {
//   return view('index.index');
//});
Route::group(['prefix'=>'/','namespace'=>'Index'],function (){
    Route::get('/','IndexController@index');
});
Route::group(['namespace'=>'Index','prefix'=>'index'],function (){
   Route::group(['prefix'=>'index'],function(){
       Route::get('index','IndexController@index',function (){
            return   view('1111');
       });
   });
});

