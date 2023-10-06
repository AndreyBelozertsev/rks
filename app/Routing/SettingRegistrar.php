<?php

declare(strict_types=1);

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use Illuminate\Contracts\Routing\Registrar;

final class SettingRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar): void
    {
        Route::middleware('web')->group(function () {
            
            Route::get('/contact', [SettingController::class, 'contactIndex'])->name('contact.index');

            Route::get('/policy', [SettingController::class, 'policyIndex'])->name('policy.index');
        });
    }
}
