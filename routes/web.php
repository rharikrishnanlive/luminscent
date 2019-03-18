<?php

Route::get('/', function () {
    return view('welcome');
});

Route::any('/login','AuthController@login');
Route::any('/register','AuthController@register');
