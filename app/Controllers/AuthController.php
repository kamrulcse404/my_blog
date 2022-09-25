<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\User;

class AuthController{
    public function loginView(){
        return ResponseHelper::renderView('auth/login', []);
    }

    public function login(){
        
        header('Location:/dashboard');
    }

    public function logout(){

        session_destroy();
        header('Location:/login');

        return "logout process is starting....";
    }
}