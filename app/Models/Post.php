<?php

namespace App\Models;

use App\Helpers\Database;

class Post{
    public $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance();
    }

    // public function addPost(array $post){

    //     $title = $post['title'];
    //     $detail = $post['details'];
    //     $completed = $post['completed'];
    //     $author = $post['author'];
    //     $author = $post['username'];

    //     $query = "INSERT INTO posts (title,	details, completed,	author,	user) VALUES(:title, :detail, :completed, :author, :username)";

    //     $stmt = $this->connection->prepare($query);
    //     $stmt->bindValue(":title", $title);
    //     $stmt->bindValue(":detail", $detail);
    //     $stmt->bindValue(":completed", $completed);
    //     $stmt->bindValue(":author",$author);
    //     return $stmt->execute();
    // }

    public function getUserByUserName(array $username){
        $username = $username['user_name'];
        // var_dump($username);exit;
        $query = 'SELECT * FROM blogs WHERE user=:userName';
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":userName", $username);
        $stmt->execute();

        return $stmt->fetch($this->connection::FETCH_ASSOC);
    }

    public function index(){
        $query = "SELECT * FROM blogs";
        $stmt = $this->connection->prepare($query);
        $data = $stmt->execute();
        return $data;
    }
}