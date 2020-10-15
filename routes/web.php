<?php

use Illuminate\Support\Facades\Route;
/* Rotas do sistema 
 * @author DAVI BERNARDO [https://github.com/dnsdigitaltech]
 * @version 1.0.2  
 * Ano 2020
 */

Route::get('/', 'Site\SiteController@index')->name('site.index');
Route::get('cadastrar', 'Site\SiteController@cadastrar')->name('site.cadastrar');
Route::post('cadastrar', 'Site\SiteController@store')->name('site.cadastrar.store');
Route::any('buscar', 'Site\SiteController@buscar')->name('site.cadastrar.buscar');
Route::get('cadastros', 'Site\SiteController@cadastros')->name('site.cadastros');