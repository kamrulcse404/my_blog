<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;

class LoginController{
    public function loginView(){
        return ResponseHelper::renderView('auth/login', []);
    }

    public function login(){
        
    }
}