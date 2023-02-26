<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Domain\Product\Models\ServiceCategory;

class ServiceCategoriesInputs extends Component
{

    protected function getData(){
        return Cache::rememberForever('service_categories_inputs', function () {
            return ServiceCategory::serviceCategoriesInputs()->get();
        });   
    }

    public function render(): View|Closure|string
    {
        return view('components.forms.service-categories-inputs', ['categories' => $this->getData()]);
    }
}