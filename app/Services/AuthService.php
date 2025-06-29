<?php 

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AuthService
{
    public function login(Request $request): string 
    {
        // xdebug_break();

        if(Auth::attempt($request->only('email', 'password'))) {
            return Auth::user()->createToken('invoice')->plainTextToken;
        }

        return 'Not Authorized';
    }
}