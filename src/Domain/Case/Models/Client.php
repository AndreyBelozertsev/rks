<?php

namespace Domain\Case\Models;

use Support\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Model;
use Domain\Case\QueryBuilders\ClientQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, ScopeActive;

    public function newEloquentBuilder($query): ClientQueryBuilder 
    {
         return new ClientQueryBuilder($query);
    }
}
