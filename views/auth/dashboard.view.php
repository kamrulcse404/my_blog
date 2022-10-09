<div class="card">
    <div class="card-header">
        <h4 style="color: #405e48;">
            <?php echo $_SESSION['name'] ?>'s todo List
            <a href="/addTodo" class="btn btn-primary float-end">Add Todo</a>
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
                                <a href="/edit?id=<?= $post['id']; ?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="/delete?id=<?= $post['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="6">No Record Found</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>