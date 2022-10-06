<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\Post;

class DashboardController{
    public function deshboardView(){
        return ResponseHelper::renderView('auth/dashboard', []);
    }

    // public function login(){
    //     $post = new Post();
    //     $posts = $post->getUserByUserName($_POST);
    //     header('Location:/dashboard');
    //     return $posts;
    // }
}