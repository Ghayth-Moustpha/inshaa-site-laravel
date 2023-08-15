<?php

use Illuminate\Support\Facades\Route;


Route::group(function () {
    
        Route::get('/','HomeController@index')->name("home"); 
       // Route::get('/about', 'AboutController@index')->name("about");
      //  Route::get('/contact', 'ContactController@index')->name("contact");
   
});


Route::get('/projects', function () {
    return view('welcome');
})->name("projects"); 

Route::get('/services', function () {
    return view('welcome');
})->name("services"); 

Route::get('/partners', function () {
    return view('welcome');
})->name("partners"); 

