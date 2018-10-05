<?php
/**
 * language chooser
 */
Route::post('/language-chooser','LanguageController@changeLanguage');
Route::post('language/',array(
    'before' => 'csrf',
    'as' => 'language-chooser',
    'uses' => 'LanguageController@changeLanguage'
));

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
