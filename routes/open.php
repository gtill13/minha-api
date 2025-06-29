<?php

use Illuminate\Support\Facades\Route;

route::controller(HealthController::class)->group(function () {
    route::get('/health', 'health');
});

route::controller(AuthController::class)->group(function () {
    route::post('/login', 'login');
});