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
        
        Route::get('/post', [PostController::class, 'index'])->name('post.index');

        Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

        Route::feeds();
        
    }
}