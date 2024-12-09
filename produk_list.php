<?php
require_once 'db.php';
$sql = "SELECT * FROM bunga";
$result = $conn->query($sql);
$data_bunga = $result->fetch_all(MYSQLI_ASSOC);

?>

<div class="ltn__product-area ltn__product-gutter  pt-65 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">List Bunga </h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <?php foreach ($data_bunga as $bunga) { ?>

                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item text-center">
                        <div class="product-img">
                            <a href=""><img src="<?= $bunga['gambar'] ?>" alt="#"></a>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href=""><?= $bunga['nama_bunga'] ?></a></h2>
                            <div class="product-ratting">
                                <ul>
                                    <?php for ($i = 0; $i < $bunga['rating']; $i++) { ?>
                                        <li><a href="#" tabindex="0"><i class="icon-star"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="product-price">
                                <span>Rp <?= $bunga['harga'] - $bunga['diskon'] ?></span>
                                <del>Rp <?= $bunga['diskon'] ?></del>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>