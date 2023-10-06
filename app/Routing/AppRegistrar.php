<?php
namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Routing\Registrar;
use App\Http\Controllers\ThumbnailController;

class AppRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar):void
    {
        Route::middleware('web')->group(function () {
            Route::get('/', [HomeController::class, 'index'])->name('home'); 
            
            // Route::get('/video/{slug}', [HomeController::class, 'video'])->name('video'); 

            Route::get('get-feedback', [HomeController::class, 'getFeedback'])->name('getFeedback'); 
        });

        Route::get('/storage/images/{dir}/{method}/{year}/{month}/{day}/{size}/{file}',ThumbnailController::class)
        ->where('method','resize|crop|fit')
        ->where('year','\d{4}$')
        ->where('month','\d{2}$')
        ->where('day','\d{2}$')
        ->where('size','(\d+|null)x(\d+|null)')
        ->where('file','.+\.(png|jpg|gif|bmp|svg|jpeg)$')
        ->name('thumbnail');
    }
}