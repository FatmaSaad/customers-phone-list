<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CustomersRequest;
use App\Contracts\CustomerServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    /**
     * @var CustomerServiceInterface
     */
    private $customerService;

    /**
     * CustomerController constructor.
     * @param CustomerServiceInterface $customerService
     */
    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->customerService = $customerService;
    }

    /**
     * @param CustomersRequest $request
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function filterdCustomers()
    {
        try {
            return CustomerResource::collection($this->customerService->filterCustomers(true));
           
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
