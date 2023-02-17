<?php
namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Contracts\Routing\Registrar;



class PostRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar):void
    {        
        
        Route::get('/article/{slug}', [PostController::class, 'show'])->name('article.show');
        
    }
}