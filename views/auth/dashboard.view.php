<?php
$user = $_SESSION['logged_in_user_name'] ?? 'Anonymous';

echo "Hello $user, Welcome to your Todo Blog";
