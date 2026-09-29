<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        return view('users', [
            'users' => $userModel->findAll()
        ]);
    }
}