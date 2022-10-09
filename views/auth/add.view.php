
<div class="col-8">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4 class="text-center" style="color: #405e48;">Add Todo List</h4>
            </div>
            <form method="POST">
                <div class="form-group mt-2">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Todo title" required>
                </div>
                <div class="form-group mt-2">
                    <label>Description</label>
                    <textarea type="text" name="description" class="form-control" placeholder="Todo Description" required></textarea>
                </div>
                <div class="form-group mt-2">
                    <label>Todo Status</label>
                    <input type="text" name="status" class="form-control" placeholder="Todo current status" required>
                </div>
                <div class="form-group mt-2">
                    <label>Author</label>
                    <input type="text" name="author" class="form-control" placeholder="Todo current status" required>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-outline-success btn-sm">Add</button>
                    <a href="/dashboard" class="btn btn-outline-primary d-left btn-sm">Back To Dashboard</a>
                </div>
            </form>
        </div>
    </div>
</div>