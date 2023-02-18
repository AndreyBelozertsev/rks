<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Domain\Product\Models\DevelopmentStage;

class DevelopmentStagesSlider extends Component
{

    protected function getData(){
        return DevelopmentStage::activeStages()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.development-stages-slider',['stages' => $this->getData() ]);
    }
}