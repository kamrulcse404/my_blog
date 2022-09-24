<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;

class HomeController{
    
    public function index(){
        return ResponseHelper::renderView('auth/home', []);
    }
}
