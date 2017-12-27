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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/nextpage/{number?}', 'HomeController@nextpage')->name('nextpage');
Route::get('/post_one/', 'HomeController@postOne')->name('postOne');
Route::post('/post_one/', 'HomeController@postOne');

Route::get('/ders','DersController@ders')->name('ders');
Route::post('/ilkformpost','DersController@dersPost');


Route::get('/json',function (){

   $array = array('a'=>121,'b'=>'xzcasds','c'=>null);

   return $array;

});