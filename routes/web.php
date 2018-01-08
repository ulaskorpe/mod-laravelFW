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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function (){
    return redirect('/');
});

Route::get('/pfiles', "Common\File\FileController@getFile")->middleware('auth')->name('pfiles');

Route::get('/get_file', "Common\File\FileController@getCommonFile")->name('get_file');

Route::get('/set_language/{lang?}','AppController@setLanguage')->name('set_language');


Route::get('/change_lang/{lang?}','AppController@setLanguage')->name('change_lang');

Route::get('/peopleArray', 'PersonnelController@index')->name('peopleArray')->middleware('auth');

Route::get('/create-personnel', 'PersonnelController@create')->name('create-personnel');
Route::post('/create-personnel', 'PersonnelController@create');

Route::get('/update-personnel/{id?}', 'PersonnelController@update')->name('update-personnel');
Route::post('/update-personnel/{id?}', 'PersonnelController@update');


Route::get('/delete-personnel/{id?}', 'PersonnelController@delete')->name('delete-personnel');
Route::post('/delete-personnel/{id?}', 'PersonnelController@delete');


Route::get('/nextpage/{number?}', 'HomeController@nextpage')->name('nextpage');
Route::get('/post_one/', 'HomeController@postOne')->name('postOne');
Route::post('/post_one/', 'HomeController@postOne');


//Route::get('/create-personnel','');

Route::get('/ders','DersController@ders')->name('ders');
Route::post('/ilkformpost','DersController@dersPost');


Route::get('/json',function (){

   $array = array('a'=>121,'b'=>'xzcasds','c'=>null);

   return $array;

});
