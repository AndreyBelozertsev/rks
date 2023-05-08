<?php

declare(strict_types=1);

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;
use Illuminate\Contracts\Routing\Registrar;

final class VacancyRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar):void
    {        
        
        Route::get('/vacancy', [VacancyController::class, 'index'])->name('vacancy.index');

        Route::get('/vacancy/{slug}', [VacancyController::class, 'show'])->name('vacancy.show');
        
    }
}
