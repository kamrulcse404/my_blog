<?php
namespace App\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Post;

class TodoController {
    public function addView(){
        return ResponseHelper::renderView('auth/add', []);
    }

    public function addTodo(){
        $postData = new Post();
        $postData->save($_POST);

        header('Location: /dashboard');
    }
}