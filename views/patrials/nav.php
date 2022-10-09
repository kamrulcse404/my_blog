<nav class="navbar navbar-light" style="background-color: #16261a;">
    <div class="container">
        <a class="navbar-brand text-light" style="color: #d8e8dc;" href="./">My Todo Blog</a>
        <?php if (session_status() !== PHP_SESSION_ACTIVE) : ?>
            <div>
                <a href="/login" class="btn btn-outline-primary d-left">Login</a>
                <a href="/register" class="btn btn-outline-danger d-left">SignUp</a>
            </div>
        <?php elseif (session_status() === PHP_SESSION_ACTIVE) : ?>
            <div>
                <span class="d-left" style="color: #9dcad4;"><?= $_SESSION['name']; ?></span>
                <form action="/" method="post">
                    <button type="submit" class="btn btn-outline-danger d-left">Logout</button>
                    </form>
            </div>
        <?php endif; ?>
    </div>
</nav>