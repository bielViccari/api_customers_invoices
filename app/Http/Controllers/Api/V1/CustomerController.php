<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CustomerResource;
use App\Http\Resources\v1\CustomerCollection;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{

    public function index()
    {
        return new CustomerCollection(Customer::paginate(15));
    }


    public function create()
    {
        //
    }


    public function store(StoreCustomerRequest $request)
    {
        //
    }


    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }


    public function edit(Customer $customer)
    {
        //
    }


    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }


    public function destroy(Customer $customer)
    {
        //
    }
}
