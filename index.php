<?php
session_start();
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/function.php";

// Default URL
$url = 'index';

// Menentukan URL berdasarkan PATH_INFO
if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] !== '/') {
    $url = trim($_SERVER['PATH_INFO'], '/');
}

// Path halaman yang akan dimuat
$page = __DIR__ . "/pages/$url.php";

// Default layout
$layout = 'landing';

// Fungsi untuk mengatur layout
function set_layout($name)
{
    global $layout;
    $layout = $name;
}

// Cek apakah halaman yang diminta ada
if (!file_exists($page)) {
    echo "File Tidak Ditemukan: $page";
    exit;
}

// Buffer output dari halaman yang di-include
ob_start();
include $page;
$content = ob_get_clean();

if ($layout === 'landing') {
    include __DIR__ . '/layouts/landing_head.php';
    echo $content;
    include __DIR__ . '/layouts/landing_foot.php';
} else {
    include __DIR__ . '/layouts/dashboard_head.php';
    echo $content;
    include __DIR__ . '/layouts/dashboard_foot.php';
}
