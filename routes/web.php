<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;

Route::get('/', function () {
    return view('welcome');
});

route::controller(HealthController::class)->group(function () {
    route::get('/health', 'get');
});