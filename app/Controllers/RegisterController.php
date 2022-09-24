<?php

namespace App\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\User;

class RegisterController{
    public function registerView(){
        return ResponseHelper::renderView('auth/register', []);
    }

    public function register(){
        $user = new User();
        $user->save($_POST);
    }
}