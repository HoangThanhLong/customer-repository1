<?php


namespace App\Services\Impl;


use App\Customer;
use App\Repositories\CustomerRepository;
use App\Services\CustomerService;

class CustomerServiceImpl implements CustomerService
{
    protected $customerRepository;
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        $customers = $this->customerRepository->getAll();
        return $customers;
    }

    public function findById($id)
    {
        $customer = $this->customerRepository->findById($id);
        return $customer;
    }

    public function create($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $this->customerRepository->create($customer);
    }

    public function edit($request, $id)
    {
        $customer = $this->customerRepository->findById($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $this->customerRepository->edit($customer);
    }

    public function destroy($id)
    {
        $customer = $this->customerRepository->findById($id);
        $this->customerRepository->destroy($customer);
    }
}
