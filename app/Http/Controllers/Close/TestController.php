<?php

namespace App\Http\Controllers\Close;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//4|h04pMUCRUDJYSzpCIzDzTlMfBd7VoKXGXhNg2rWNc6871a07

class TestController extends Controller
{
   
    public function test(Request $request): array {

        return ['data' => 'asd'];;
    }

}
