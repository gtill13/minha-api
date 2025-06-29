<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use App\Services\HealthService;
use Symfony\Component\HttpFoundation\JsonResponse;

class HealthController extends Controller
{
    public function health(): JsonResponse {
        // xdebug_break();

        return (new HealthService())->health();
    }
}
