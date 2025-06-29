<?php 

namespace App\Services;

class HealthService
{
    public function get(): string 
    {
        return 'API esta saudável';
    }
}