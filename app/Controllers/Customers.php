<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        return view('customers', [
            'customers' => $customerModel->findAll()
        ]);
    }
}