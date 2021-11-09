<?php

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/contact', function (){
    return view('contact');
})->name('contactPage');

Route::get('/about', function (){
    return view('about');
})->name('aboutPage');

Route::get('/multy/{num1}', 'mathController@multy')->name('mathPage');
