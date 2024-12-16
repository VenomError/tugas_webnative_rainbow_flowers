<?php

require_once __DIR__ . "/../db.php";
require_once __DIR__ . "/../function.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$sql = "INSERT INTO user 
(name,email,password)
VALUES
('$name','$email','$password')
";

$result = $conn->query($sql);

if ($result) {

    echo alert('Register Success', '/login');
}
