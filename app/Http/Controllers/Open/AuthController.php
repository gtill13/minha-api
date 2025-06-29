<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

//4|h04pMUCRUDJYSzpCIzDzTlMfBd7VoKXGXhNg2rWNc6871a07

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse {
        // xdebug_break();

        return (new AuthService())->login($request);
    }
}
