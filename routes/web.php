<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/health', function () {
    $i = 0;
 
    return dd('API esta saudável');
});
