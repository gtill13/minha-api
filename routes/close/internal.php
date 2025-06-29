<?php

use Illuminate\Support\Facades\Route;

route::middleware('auth:sanctum')->group(function () {
    route::controller(TestController::class)->group(function () {
        route::get('/test', 'test');
    });
});

