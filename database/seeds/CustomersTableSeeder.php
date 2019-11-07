<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->id = 1;
        $customer->name = 'Khach Hang 1';
        $customer->email = 'Khachhang1@gmail.com';
        $customer->address = 'Ha Noi';
        $customer->phone = '0123456789';
        $customer->save();

        $customer = new Customer();
        $customer->id = 2;
        $customer->name = 'Khach Hang 2';
        $customer->email = 'Khachhang2@gmail.com';
        $customer->address = 'HCM';
        $customer->phone = '0123456799';
        $customer->save();
    }
}
