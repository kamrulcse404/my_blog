<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;

class AuthController{
    public function loginView(){
        return ResponseHelper::renderView('auth/login', []);
    }

    public function login(){
        
    }

    public function logout(){
        return "logout process is starting....";
    }
}