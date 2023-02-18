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
        });

        Route::get('/storage/images/{dir}/{method}/{size}/{file}',ThumbnailController::class)
            ->where('method','resize|crop|fit')
            ->where('size','\d+x\d+')
            ->where('file','.+\.(png|jpg|gif|bmp|svg|jpeg)$')
            ->name('thumbnail');
        
        
        Route::get('/contact', [SettingController::class, 'contactIndex'])->name('contact.index');
        
    }
}