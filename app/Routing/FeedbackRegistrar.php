<?php

declare(strict_types=1);

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Routing\Registrar;

final class FeedbackRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar): void
    {
        Route::middleware('web')->group(function () {


        });
    }
}
