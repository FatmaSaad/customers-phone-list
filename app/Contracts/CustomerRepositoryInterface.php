<?php


namespace App\Contracts;


interface CustomerRepositoryInterface
{

    public function filterCustomers($paginate);
}
