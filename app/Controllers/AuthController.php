<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\User;

class AuthController{
    public function loginView(){
        return ResponseHelper::renderView('auth/login', []);
    }

    public function login(){
        $user = new User();

        $user->login($_POST);

        header('Location: /dashboard');
    }

}