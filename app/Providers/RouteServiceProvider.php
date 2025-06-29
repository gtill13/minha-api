<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = "App\\Http\\Controllers";

    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function (): void {
            Route::middleware('web')
                ->group(base_path('routes/web.php'))
            ;

            Route::namespace($this->namespace)->middleware('api')->group(
                function(): void {
                    Route::namespace('Open')
                        ->group(base_path('routes/open.php'));
                    Route::namespace('Close')
                        ->group(base_path('routes/close/internal.php'));
                    Route::namespace('Close')
                        ->group(base_path('routes/close/external.php'));
                }
            );
        });
    }

    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
