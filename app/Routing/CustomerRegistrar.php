<?php

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Routing\Registrar;
use App\Http\Controllers\CustomerController;

class CustomerRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar): void
    {
        Route::middleware('web')->group(function () {
            Route::get('/contact/form', [CustomerController::class, 'showForm'])->name('form.show');

            Route::post('/contact/form', [CustomerController::class, 'contactFormProcess']);

            Route::post('/contact/modal-form', [CustomerController::class, 'contactModalFormProcess'])->name('form.send-modal');

        });
    }
}
