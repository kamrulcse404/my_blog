<?php
// $user = $_SESSION['logged_in_user_name'] ?? 'Anonymous';

// echo "Hello $user, Welcome to your Todo Blog";

?>

<div class="card">
    <div class="card-header">
        <h3 style="color: #405e48;">
            <a href="/add" class="btn btn-primary float-end">Add Post</a>
        </h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Completed</th>
                </tr>
            </thead>

            <tbody>
                <?php


                use App\Controllers\DashboardController;

                $post = new DashboardController();
                $posts = $post->login();
                if ($posts) {
                    foreach ($posts as $post) {
                ?>
                        <tr>
                            <td><?php echo $post->id; ?></td>
                            <td><?php echo $post->title; ?></td>
                            <td><?php echo $post->details; ?></td>
                            <td><?php echo $post->completed; ?></td>
                            <td>
                                <a href="/edit?id=<?= $post->id; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete?id=<?= $post->id; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">No Record Found</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>