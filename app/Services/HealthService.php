<?php 

namespace App\Services;

class HealthService
{
    public function get(): string 
    {
        return dd('API esta saudável');
    }
}