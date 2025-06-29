<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

//4|h04pMUCRUDJYSzpCIzDzTlMfBd7VoKXGXhNg2rWNc6871a07

class AuthController extends Controller
{
    public function login(Request $request): array {
        // xdebug_break();
       
        $service = new AuthService();

        return ['data' => $service->login($request)];;
    }

    public function teste(Request $request): array {

        return ['data' => 'asd'];;
    }

}
