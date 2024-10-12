<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register global middleware here
        // You can add more middleware classes here if needed
    })
    ->withMiddleware([
        // Register route-specific middleware here
        'checkRole' => App\Http\Middleware\CheckRole::class,
    ])
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

    
