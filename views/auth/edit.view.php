<?php

use App\Controllers\TodoController;

$editData = new TodoController();
$data = $editData->editTodo();
?>


<div class="col-8">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4 class="text-center" style="color: #405e48;">Update Todo List</h4>
            </div>
            <form method="POST">
                <div class="form-group mt-2">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="<?= $data['title'];?>" required>
                </div>
                <div class="form-group mt-2">
                    <label>Description</label>
                    <textarea type="text" name="description" class="form-control" required><?= $data['details'];?></textarea>
                </div>
                <div class="form-group mt-2">
                    <label>Todo Status</label>
                    <input type="text" name="status" class="form-control" value="<?= $data['completed'];?>" required>
                </div>
                <div class="form-group mt-2">
                    <label>Author</label>
                    <input type="text" name="author" class="form-control" value="<?= $data['author'];?>" required>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-outline-success btn-sm">Update</button>
                    <a href="/dashboard" class="btn btn-outline-primary d-left btn-sm">Back To Dashboard</a>
                </div>
            </form>
        </div>
    </div>
</div>