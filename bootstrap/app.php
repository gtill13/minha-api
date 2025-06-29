<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\AuthenticationException;
use App\Traits\HttpResponse;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Console\Scheduling\Schedule;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->renderable(function (AuthenticationException $e) {
            if (request()->expectsJson()) {
                return (new class {use HttpResponse;})->error(
                    'Você não está autenticado para acessar este recurso.',
                    Response::HTTP_UNAUTHORIZED,
                    [$e->getMessage()],
                    request()->all()
                );
            }
        });
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->command('sanctum:prune-expired --hours=24')->daily();
    })
    ->create();
