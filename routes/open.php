<?php

use Illuminate\Support\Facades\Route;

route::controller(HealthController::class)->group(function () {
    route::get('/health', 'get');
});