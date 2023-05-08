<?php

namespace Domain\Vacancy\Models;

use Support\Traits\HasSlug;
use Support\Traits\CreateSeo;
use Support\Traits\ScopeActive;
use Support\Traits\DateForHumman;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\ResolveRouteBindingSlug;
use Domain\Vacancy\QueryBuilders\VacancyQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancy extends Model
{
    use HasFactory, HasSlug, ScopeActive,ResolveRouteBindingSlug, DateForHumman, CreateSeo;

    protected $routeName = 'vacancy.show';

    protected function makeUrl():string
    {
       return route('vacancy.show', ['slug' => $this->slug] );
    }

    public function newEloquentBuilder($query): VacancyQueryBuilder 
    {
        return new VacancyQueryBuilder($query);
    }
}
