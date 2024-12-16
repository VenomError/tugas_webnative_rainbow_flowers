<?php
// init nilai untuk pengeditan nnti

$id = '';
$nama_bunga = '';
$harga = '';
$diskon = '';
$rating = '';
$deskripsi = '';

$mode = 'create';

if (isset($_GET['mode']) && isset($_GET['id'])) {
    $mode = $_GET['mode'];
    $id = $_GET['id'];
    $bunga = $conn->query("SELECT * FROM bunga WHERE id='$id'");

    $mode = 'edit';

    if ($bunga) {
        $bunga = $bunga->fetch_object();

        $id = $bunga->id;
        $nama_bunga = $bunga->nama_bunga;
        $harga = $bunga->harga;
        $diskon = $bunga->diskon;
        $rating = $bunga->rating;
        $deskripsi = $bunga->deskripsi;
    }
}
?>

<form action="<?= $mode == 'create' ? '/actions/createProduct.php' : '/actions/updateProduct.php' ?>" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md mb-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div>
            <label for="nama_bunga" class="block font-medium mb-1">Nama Bunga</label>
            <input required type="text" name="nama_bunga" id="nama_bunga" class="w-full border rounded p-2" value="<?= $nama_bunga ?>">
        </div>

        <div>
            <label for="harga" class="block font-medium mb-1">Harga </label>
            <input required type="number" name="harga" id="harga" class="w-full border rounded p-2" value="<?= $harga ?>">
        </div>

        <div>
            <label for="diskon" class="block font-medium mb-1">Diskon </label>
            <input required type="number" name="diskon" id="diskon" class="w-full border rounded p-2" value="<?= $diskon ?>">
        </div>

        <div>
            <label for="rating" class="block font-medium mb-1">Rating</label>
            <input required type="number" name="rating" id="rating" step="0.1" max="5" min="0" class="w-full border rounded p-2" value="<?= $rating ?>">
        </div>

        <div>
            <label for="gambar" class="block font-medium mb-1">Gambar</label>
            <input <?= $mode == 'create' ? 'required' : '' ?> type="file" name="gambar" id="gambar" class="w-full border rounded p-2">
        </div>

        <div class="md:col-span-2">
            <label for="deskripsi" class="block font-medium mb-1">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full border rounded p-2"><?= $deskripsi ?></textarea>
        </div>
    </div>


    <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        <?= $mode == 'create' ? 'Create' : 'Edit' ?>
    </button>
    <a href="/dashboard" class="mt-4 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Cancel</a>
</form>