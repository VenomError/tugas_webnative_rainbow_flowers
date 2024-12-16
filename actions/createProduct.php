<?php

require_once __DIR__ . "/../db.php";
require_once __DIR__ . "/../function.php";

$nama_bunga = $_POST['nama_bunga'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$rating = $_POST['rating'];
$deskripsi = $_POST['deskripsi'];
$gambar = uploadFile('gambar');


$sql = "INSERT INTO bunga 
(nama_bunga,gambar,harga,diskon,rating,deskripsi)
VALUES
('$nama_bunga','$gambar','$harga','$diskon','$rating','$deskripsi')
";

if ($conn->query($sql)) {
    echo alert('Create Product Success', '/dashboard');
} else {
    echo alert('Create Product Failed');
}
