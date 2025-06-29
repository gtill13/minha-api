<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use App\Services\HealthService;

class HealthController extends Controller
{
    public function get(): array {
        // xdebug_break();
        $service = new HealthService();

        return ['data' => $service->get()];
    }
}
