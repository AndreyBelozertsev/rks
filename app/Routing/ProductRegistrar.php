<?php

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use Illuminate\Contracts\Routing\Registrar;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\DevelopmentStageController;
use App\Http\Controllers\AdditionalServiceController;

class ProductRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar): void
    {
        Route::middleware('web')->group(function () {

            Route::get('/{category}/service/{slug}', [ServiceController::class, 'show'])->name('service.show');

            Route::get('/service-category', [ServiceCategoryController::class, 'index'])->name('service-category.index');

            Route::get('/service-category/{slug}', [ServiceCategoryController::class, 'show'])->name('service-category.show');

            Route::get('/development/stage/{slug}', [DevelopmentStageController::class, 'show'])->name('development-stage.show');

            Route::get('/additional-service/{slug}', [AdditionalServiceController::class, 'show'])->name('additional-service.show');
        });
    }
}
