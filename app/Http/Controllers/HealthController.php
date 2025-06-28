<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HealthService;

class HealthController extends Controller
{
    public function get() {
        // xdebug_break();
        $service = new HealthService();

        return $service->get();
    }
}
