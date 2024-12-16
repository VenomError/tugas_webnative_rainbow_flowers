<div class="ltn__login-area pb-90 pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1>CREATE NEW PRODUCT</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form action="/actions/createProduct.php" method="POST" class="ltn__form-box contact-form-box" enctype="multipart/form-data">
                        <label>Nama Bunga</label>
                        <input type="text" name="nama_bunga" placeholder="Nama Bunga*" class="form-control mb-3" required>
                        <label>Harga</label>
                        <input type="number" name="harga" placeholder="Harga*" class="form-control mb-3" required>
                        <label>Diskon</label>
                        <input type="number" name="diskon" placeholder="Diskon*" class="form-control mb-3" required>
                        <label>Rating</label>
                        <input type="number" inputmode="numeric" max="5" min="1" name="rating" placeholder="Rating*" class="form-control mb-3" required>
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control mb-3" required>
                        <textarea name="deskripsi" placeholder="Description" cols="30" rows="10" required></textarea>
                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/produk_list.php' ?>