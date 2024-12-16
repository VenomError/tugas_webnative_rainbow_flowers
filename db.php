<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'db_rainbow_flowers';

$conn = new mysqli($host, $username, $password, $db_name);
if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}


// function
require_once __DIR__ . '/function.php';
