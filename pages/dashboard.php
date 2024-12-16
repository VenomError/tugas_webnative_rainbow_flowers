<?php
set_layout('dashboard');
if (!isLogin()) {
  alert('Please Login First', '/login');
}


if (isset($_GET['mode']) && isset($_GET['id'])) {
  $mode = $_GET['mode'];
  $id = $_GET['id'];

  if ($mode == 'hapus') {
    $result = $conn->query("DELETE FROM bunga WHERE id='$id'");
    if ($result) {
      alert('Deleted Success', '/dashboard', '/dashboard');
    } else {
      alert('Deleted Failed', '/dashboard', '/dashboard');
    }
  }
}

?>

<div class="min-h-full">
  <?php include  __DIR__ . '/../components/dashboard/header.php' ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Form Create Product -->
      <?php include __DIR__ . '/create_product.php' ?>
      <?php include __DIR__ . '/table_list_product.php' ?>
    </div>
  </main>
</div>