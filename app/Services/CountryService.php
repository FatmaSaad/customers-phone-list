<?php


namespace App\Services;

use App\Contracts\CountryServiceInterface;
use App\Contracts\CountryRepositoryInterface;

class CountryService implements CountryServiceInterface
{


    /**
     * @var CountryRepositoryInterface
     */
    private $countryRepository;


    /**
     * CountryService constructor.
     * @param CountryRepositoryInterface $countryRepository
     */
    public function __construct(CountryRepositoryInterface $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }



    /**
     * @return array
     */
    public function countriesList(): array
    {
        return $this->countryRepository->countriesList();
    }
}
