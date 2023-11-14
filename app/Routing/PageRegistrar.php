<?php

declare(strict_types=1);

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Contracts\Routing\Registrar;

final class PageRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar):void
    {         
        Route::get('/{slug?}', [PageController::class, 'show'])->name('page.show');
    }
}
