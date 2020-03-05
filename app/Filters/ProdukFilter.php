<?php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class ProdukFilter extends AbstractFilter
{
    protected $filters = [
        'type' => TypeFilter::class
    ];
}
