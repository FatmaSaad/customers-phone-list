<?php

namespace App\Http\Controllers\Web;

use App\Contracts\CountryServiceInterface;
use App\Contracts\CustomerServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomersRequest;

class CustomerController extends Controller
{
    /**
     * @var CustomerServiceInterface
     */
    private $customerService;

    /**
     * @var CountryServiceInterface
     */
    private $countryService;

    /**
     * CustomerController constructor.
     * @param CustomerServiceInterface $customerService
     * @param CountryServiceInterface $countryService
     */
    public function __construct(CustomerServiceInterface $customerService, CountryServiceInterface $countryService)
    {
        $this->customerService = $customerService;
        $this->countryService = $countryService;
    }

    /**
     * Filtering phone numbers per country using country code.
     * @param CustomersRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function filterdCustomers(CustomersRequest $request)
    {
        $countries = $this->countryService->countriesList();

        $customers = $this->customerService->filterCustomers(false);

        return view('customers', compact('countries', 'customers'));
    }
}
