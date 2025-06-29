<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;

trait HttpResponse
{
    public function success(string $message, int $code = Response::HTTP_OK, array $data = []) {
        return response()->json(
            [
                'message' => $message,
                'status' => $code,
                'data' => $data
            ],
            $code
        );
    }
    public function error(string $message, int $code = Response::HTTP_BAD_REQUEST, array $errors = [], array $data = []) {
        return response()->json(
            [
                'message' => $message,
                'status' => $code,
                'errors' => $errors,
                'data' => $data
            ],
            $code
        );
    }
}