<?php
namespace App\Models;

use App\Helpers\Database;

class Post{
    public $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance();
    }

    public function getData(){

        $query = "SELECT * FROM blogs WHERE user = :user";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':user', $_SESSION['username']);
        $stmt->execute();
        $data = $stmt->fetchAll($this->connection::FETCH_ASSOC);
        return $data;
    }

    public function save(array $postData){
        $title = $postData['title'];
        $details = $postData['description'];
        $status = $postData['status'];
        $author = $postData['author'];
        $userName = $_SESSION['username'];

        $query = "INSERT INTO blogs (title, details, completed, author, user) VALUES (:title, :details, :completed, :author, :userName)";
        $stmt = $this->connection->prepare($query);

        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':details', $details);
        $stmt->bindValue(':completed', $status);
        $stmt->bindValue(':author', $author);
        $stmt->bindValue(':userName', $userName);

        $stmt->execute();
    }
}