<?php
$data = $conn->query("SELECT * FROM bunga")->fetch_all(MYSQLI_ASSOC);
?>
<!-- Table List Product -->
<h2 class="text-2xl font-bold mb-4">List Product</h2>

<table class="min-w-full bg-white border rounded shadow-md">
    <thead>
        <tr class="bg-gray-200">
            <th class="py-2 px-4 border">Nama Bunga</th>
            <th class="py-2 px-4 border">Harga</th>
            <th class="py-2 px-4 border">Diskon</th>
            <th class="py-2 px-4 border">Rating</th>
            <th class="py-2 px-4 border">Gambar</th>
            <th class="py-2 px-4 border">Deskripsi</th>
            <th class="py-2 px-4 border">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $bunga) : ?>

            <!-- Contoh Data Produk -->
            <tr>
                <td class="py-2 px-4 border"><?= $bunga['nama_bunga'] ?? '' ?></td>
                <td class="py-2 px-4 border">Rp <?= number_format($bunga['harga'] ?? 0, '2') ?></td>
                <td class="py-2 px-4 border">Rp <?= number_format($bunga['diskon'] ?? 0, '2') ?></td>
                <td class="py-2 px-4 border"><?= $bunga['rating'] ?? 0 ?></td>
                <td class="py-2 px-4 border">
                    <img src="<?= $bunga['gambar'] ?? '' ?>" alt="Mawar Merah" class="h-12 w-12 object-cover">
                </td>
                <td class="py-2 px-4 border"><?= $bunga['deskripsi'] ?? '' ?></td>
                <td class="py-2 px-4 border">
                    <a href="?mode=edit&id=<?= $bunga['id'] ?>" class="text-blue-600 hover:underline mr-2">Edit</a>
                    <a href="?mode=hapus&id=<?= $bunga['id'] ?>" class="text-red-600 hover:underline">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>