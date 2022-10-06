
<div class="col-8">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4 class="text-center" style="color: #405e48;">User Registration Form</h4>
            </div>
            <form method="POST">
                <div class="form-group mt-2">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your first name" required>
                </div>
                <div class="form-group mt-2">
                    <label>User Name</label>
                    <input type="text" name="user_name" class="form-control" placeholder="Enter your user name" required>
                </div>
                <div class="form-group mt-2">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group mt-2">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-outline-primary btn-sm">SignUp</button>
                    <a href="/login" class="btn btn-outline-primary d-left btn-sm">Back To Login</a>
                </div>
            </form>
        </div>
    </div>
</div>