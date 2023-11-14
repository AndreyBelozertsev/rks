<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Domain\Product\Models\ServiceCategory;

class ServiceCategoriesMain extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $serviceCategories = Cache::rememberForever('service_categories', function () {
            return ServiceCategory::activeItems()->get();
        }); 
        return view('components.service-categories-main',compact('serviceCategories'));
    }
}
