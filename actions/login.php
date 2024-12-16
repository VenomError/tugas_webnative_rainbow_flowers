<?php
session_start();
require_once __DIR__ . "/../db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$user = $conn->query("SELECT * FROM user WHERE email='$email'");

if ($user->num_rows > 0) {

    $user = $user->fetch_object();
    $_SESSION['auth'] = $user;
    echo alert('Login Success', '/dashboard');
} else {
    echo alert('Login Failed', '/login');
}
