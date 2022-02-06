<?php

namespace App\Filters;

use Illuminate\Support\Facades\DB;

/**
 * Class CustomerFilter
 * @package App\Filters
 */
class CustomerFilter extends BaseFilters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = [
        'country_id',
        'state',
    ];


    /**
     * Filter Customer by country_id.
     *
     * @param $value
     * @return mixed
     */
    protected function countryId($value)
    {
        return $this->builder->where('countries.id', $value);
    }


    /**
     *
     * @param string|int $value
     * @return Builder
     */
    protected function state($value)
    {
        if (!method_exists($this, $value)) {
            return $this->builder;
        }

        return $this->{$value}();
    }

    /**
     *
     * @return Builder
     */
    public function valid()
    {
        return $this->builder->whereRaw("Replace(phone,' ','') REGEXP IF(countries.pattern = '', '.*', countries.pattern)");
    }

    /**
     * Filter Customer by is_valid.
     *
     * @param $value
     * @return mixed
     */
    protected function not_valid()
    {
        return $this->builder->whereRaw("Replace(phone,' ','') NOT REGEXP IF(countries.pattern = '', '.*', countries.pattern)");
    }
}
