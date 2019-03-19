<?php

Route::get('/', function () {
    return view('welcome');
});

Route::any('/login','AuthController@login');
Route::any('/register','AuthController@register');
Route::any('/admin_dashboard','AuthController@admin_dashboard');
Route::any('/user_dashboard','AuthController@user_dashboard');
