<?php


namespace App\Contracts;

interface CustomerServiceInterface
{
    public function filterCustomers(bool $paginate);
}
