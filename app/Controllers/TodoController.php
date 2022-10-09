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
    
    public function editView(){
        return ResponseHelper::renderView('auth/edit', []);
    }

    public function editTodo(){
        $id = $_REQUEST['id'];
        $editData = new Post();
        $result = $editData->getDataForEdit($id);
        return $result;
    }

    public function updateTodo(){
        $update = new Post();
        $id = $_REQUEST['id'];
        $update->update($_POST, $id);
        header('Location: /dashboard');
    }
}