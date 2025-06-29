<?php

use Illuminate\Support\Facades\Route;

route::controller(TestController::class)->middleware('auth:sanctum')->group(function () {
    route::get('/test', 'test');
});