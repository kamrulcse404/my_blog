<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;


class PostController{
    public function addView(){
        return ResponseHelper::renderView('add', []);
    }

    public function addPost(){
        // $posts = new Post();
        // $allPosts = $posts->index();
        // // var_dump($allPosts);exit;
        // return $allPosts;
    }
}