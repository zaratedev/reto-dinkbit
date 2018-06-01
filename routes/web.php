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

Route::get('/', 'HomeController@welcome');
Route::get('contacto', 'HomeController@contact')->name('contact');
Route::get('cotiza-tu-prestamo', 'HomeController@quote')->name('quote');
Route::get('quiénes-somos', 'HomeController@about')->name('about');
Route::get('nuestros-servicios', 'HomeController@services')->name('services');
Route::get('preguntas-frecuentes', 'HomeController@faqs')->name('faqs');
Route::post('send-email', 'ContactController@sendEmail');
Route::post('generate-table-amortization', 'QuoteController@generateTableAmortization');
