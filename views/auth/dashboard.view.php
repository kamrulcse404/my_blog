<div class="card">
    <div class="card-header">
        <h4 style="color: #405e48;">
            <?php echo $_SESSION['name'] ?>'s Todo List
            <a href="/addTodo" class="btn btn-outline-primary float-end">Add Todo</a>
        </h4>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php

                use App\Controllers\DashboardController;

                $post = new DashboardController();
                $posts = $post->getAllTodo();
                if ($posts) {
                    foreach ($posts as $post) {
                ?>
                        <tr>
                            <td><?php echo $post['id']; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td><?php echo $post['details']; ?></td>
                            <td><?php echo $post['author']; ?></td>
                            <td><?php echo $post['completed']; ?></td>
                            <td>
                                <a href="/edit?id=<?= $post['id']; ?>" class="btn btn-outline-primary">Edit</a>
                            </td>
                            <td>
                                <form action="/dashboard" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="7">No Record Found</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>