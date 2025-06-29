<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use App\Services\HealthService;

class HealthController extends Controller
{
    public function health(): array {
        // xdebug_break();
        $service = new HealthService();

        return ['data' => $service->health()];
    }
}
