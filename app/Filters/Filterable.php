<?php

namespace App\Filters;

use Illuminate\Support\Facades\App;

/**
 * Trait Filterable
 * @package App\Classes\Filters
 */
trait Filterable
{
    /**
     * Apply all relevant thread filters.
     *
     * @param $query
     * @param BaseFilters|null $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter($query, BaseFilters $filters = null)
    {
        if (!$filters) {
            $filters = App::make($this->filter);
        }

        return $filters->apply($query);
    }
}
