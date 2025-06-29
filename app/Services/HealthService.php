<?php 

namespace App\Services;

class HealthService
{
    public function health(): string 
    {
        return 'API esta saudável';
    }
}