<?php

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use Illuminate\Contracts\Routing\Registrar;

class ProductRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar): void
    {
        Route::middleware('web')->group(function () {
            Route::get('/{category}/service/{slug}', [ServiceController::class, 'show'])->name('service.show');
        });

        Route::middleware('web')->group(function () {
            Route::get('/development/stage/{slug}', [DevelopmentStageController::class, 'show'])->name('service.show');
        });
    }
}
