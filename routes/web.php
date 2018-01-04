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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/lang/{locale?}', [
        'as'=>'lang',
        'uses'=>'TLVController@changeLang'
    ]);



Route::get('/', 'TLVController@indexPage');
Route::get('/accueil', 'TLVController@indexPage');
Route::get('/projet', 'TLVController@aboutPage');
Route::get('/contact', 'TLVController@contactPage');
Route::get('/villa-detail', 'TLVController@detailPage');

Route::post('/DER/submit', 'TLVController@DERstore');
Route::post('/DRDV/submit', 'TLVController@DRDVstore');
Route::post('/DB/submit', 'TLVController@DBstore');
Route::post('/contact/submit', 'TLVController@contactstore');
