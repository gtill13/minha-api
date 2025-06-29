<?php 

namespace App\Services;

use App\Traits\HttpResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class HealthService
{
    use HttpResponse;

    public function health(): JsonResponse 
    {
        return $this->success('API esta saudável');
    }
}