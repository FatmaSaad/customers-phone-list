<?php


namespace App\Services;

use App\Contracts\CustomerRepositoryInterface;
use App\Contracts\CustomerServiceInterface;

class CustomerService implements CustomerServiceInterface
{

    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * CustomerService constructor.
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }


    /**
     * @return mixed
     */
    public function filterCustomers($paginate = false)
    {
        return $this->customerRepository->filterCustomers($paginate);
    }
}
