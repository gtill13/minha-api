<?php 

namespace App\Services;

use App\Traits\HttpResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
class AuthService
{
    use HttpResponse;

    public function login(Request $request): JsonResponse 
    {
        // xdebug_break();

        if(Auth::attempt($request->only('email', 'password'))) {
            return $this->success(
                'Acesso autorizado',
                Response::HTTP_OK,
                [
                    'access_token' => Auth::user()->createToken('invoice')->plainTextToken,
                ]
            );
        }

        return $this->error(
            'Acesso não autorizado',
            Response::HTTP_UNAUTHORIZED,
            [
                'Credenciais inválidas ou ausentes.'
            ],
            $request->only('email', 'password')
        );
    }
}