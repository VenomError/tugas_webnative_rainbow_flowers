<?php

function isLogin()
{
    if (isset($_SESSION['auth']) && !empty($_SESSION['auth'])) {
        return true;
    } else {
        return false;
    }
}

function auth()
{
    if (isset($_SESSION['auth']) && !empty($_SESSION['auth'])) {
        return $_SESSION['auth'];
    } else {
        return null;
    }
}


function alert($message = '', $onConfirm = '/', $onReject = '/')
{

?>
    <script>
        if (confirm('<?= $message ?>')) {
            window.location.href = '<?= $onConfirm ?>';
        } else {
            window.location.href = '<?= $onReject ?>';
        }
    </script>

<?php
}
?>

<?php
function uploadFile($fileInput, $allowedTypes = ['jpg', 'png', 'jpeg', 'gif'], $maxFileSize = 2 * 1024 * 1024)
{
    $uploadDir = __DIR__ . "/uploads/";

    // Periksa apakah ada file yang diunggah
    if (!isset($_FILES[$fileInput])) {
        return "No file uploaded.";
    }

    $file = $_FILES[$fileInput];
    $fileName = basename($file['name']);
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Validasi tipe file
    if (!in_array($fileExt, $allowedTypes)) {
        return null;
    }

    // Validasi ukuran file
    if ($fileSize > $maxFileSize) {
        return null;
    }

    // Periksa error upload
    if ($fileError !== UPLOAD_ERR_OK) {
        return null;
    }

    // Buat direktori jika belum ada
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Buat nama file unik
    $uniqueFileName = uniqid() . '_' . time() . '.' . $fileExt;

    // Path untuk menyimpan file
    $targetFilePath = $uploadDir . $uniqueFileName;

    // Pindahkan file dari temporary ke direktori tujuan
    if (move_uploaded_file($fileTmpName, $targetFilePath)) {
        return "uploads/" . $uniqueFileName;
    } else {
        return 'img/product/12.png';
    }
}
