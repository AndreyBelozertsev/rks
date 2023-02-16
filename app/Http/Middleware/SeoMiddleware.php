<?php

namespace App\Http\Middleware;

use Closure;

use Domain\Seo\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SeoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $seo = Cache::rememberForever('seo_' . str($request->getPathInfo())->slug('_'), function () use($request) {
            return Seo::query()->where('url', $request->getPathInfo())->first() ?? false;
        });
        
        view()->share('seo_title', isset($seo->title) ? $seo->title : null);
        
        return $next($request);
    }
}
