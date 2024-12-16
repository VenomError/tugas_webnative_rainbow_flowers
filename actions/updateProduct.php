<?php

require_once __DIR__ . "/../db.php";
require_once __DIR__ . "/../function.php";

$nama_bunga = $_POST['nama_bunga'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$rating = $_POST['rating'];
$deskripsi = $_POST['deskripsi'];

$id = $_POST['id'];

if (!empty($_FILES['gambar']['name'])) {
    $gambar = uploadFile('gambar');
    $sql = "UPDATE bunga SET
    nama_bunga='$nama_bunga',
    harga='$harga',
    diskon='$diskon',
    rating='$rating',
    gambar='$gambar',
    deskripsi='$deskripsi'
    WHERE id='$id'
    ";
} else {
    $sql = "UPDATE bunga SET
    nama_bunga='$nama_bunga',
    harga='$harga',
    diskon='$diskon',
    rating='$rating',
    deskripsi='$deskripsi'
    WHERE id='$id'
    ";
}



if ($conn->query($sql)) {
    echo alert('Update Product Success', '/dashboard', '/dashboard');
} else {
    echo alert('Update Product Failed', '/dashboard', '/dashboard');
}
