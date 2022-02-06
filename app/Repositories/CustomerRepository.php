<?php


namespace App\Repositories;

use App\Contracts\CustomerRepositoryInterface;
use App\Models\Country;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * @var Customer
     */
    private $customer;


    /**
     * CustomerRepository constructor.
     * @param Customer $customer
     */
    public function __construct(Customer $customer, Country $country)
    {
        $this->customer = $customer;
    }

    /**
     * @return Customer|\Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection|mixed|object
     */
    public function filterCustomers($paginate)
    {
        $customers = $this->customer->filter()->join("countries", function ($join) {
            $join->on(
                DB::raw("SUBSTRING_INDEX(SUBSTRING(countries.code FROM 2), ')', 1)"),
                "=",
                DB::raw("SUBSTRING_INDEX(SUBSTRING(phone FROM 2), ')', 1)")
            );
        })->selectRaw(
            "countries.id as country_id,
             countries.name as country,
             countries.code, 
             phone,
             IF(Replace(phone,' ','') REGEXP IF(countries.pattern = '', '.*', countries.pattern), true, false) AS is_valid"
        );

        if ($paginate) {
            return $customers->paginate(5);
        }

        return $customers->get();
    }
}
