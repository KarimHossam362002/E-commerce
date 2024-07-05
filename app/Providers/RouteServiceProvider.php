<?php

namespace App\Providers;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    // public const HOME = '/Dashboard';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(function () {
                    // Add the redirection to the home route
                    // Route::get('/', function () {
                    //     return redirect(self::HOME);
                    // });

                    // Include the other web routes
                    require base_path('routes/web.php');
                });
        });
    }
}

