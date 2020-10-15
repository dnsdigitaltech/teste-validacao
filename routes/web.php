<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Site\SiteController@index')->name('site.index');
Route::get('cadastrar', 'Site\SiteController@cadastrar')->name('site.cadastrar');
Route::post('cadastrar', 'Site\SiteController@store')->name('site.cadastrar.store');
Route::any('buscar', 'Site\SiteController@buscar')->name('site.cadastrar.buscar');
Route::get('cadastros', 'Site\SiteController@cadastros')->name('site.cadastros');