<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\Post;

class DashboardController{
    public function deshboardView(){
        return ResponseHelper::renderView('auth/dashboard', []);
    }

    public function getAllTodo(){
        $data = new Post();
        $userList = $data->getData();
        return $userList;
    }
}