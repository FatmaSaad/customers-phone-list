<?php


namespace App\Repositories;

use App\Contracts\CountryRepositoryInterface;
use App\Models\Country;

class CountryRepository implements CountryRepositoryInterface
{
    /**
     * @var Country
     */
    private $country;

    /**
     * CountryRepository constructor.
     * @param Country $country
     */
    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    /**
     * @return Country|\Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection|mixed|object
     */
    public function countriesList(): array
    {
        $countries = $this->country->get(['id', 'name'])->toArray();

        return $countries;
    }
}
