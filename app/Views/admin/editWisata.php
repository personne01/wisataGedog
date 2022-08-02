<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    input[type=text],
    input[type=file],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .ini {
        margin: 20px auto;

    }

    form {
        width: 80%;
        margin-top: 20px;
    }
</style>

<div class="ini">
    <h3>Edit Wisata</h3>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger" role="alert">
            <h4>Periksa Entrian Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form action="/Admin/update/<?= $wisata['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div style="margin-bottom: 1.75rem">
            <label for="id" class="d-block input-label">ID</label>
            <input style="font-weight: bolder;" type="text" name="id" value="<?= $wisata['id']; ?>" disabled>
        </div>

        <div style="margin-bottom: 1.75rem">
            <label for="namaWisata" class="d-block input-label">Nama Wisata</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="text" name="namaWisata" id="namaWisata" placeholder="Masukkan Nama Wisata" autocomplete="on" required autofocus value="<?= $wisata['nama_wisata']; ?>" />
                <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('namaWisata'); ?></h3>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 1.75rem">
            <div style="margin-bottom: 1.75rem">
                <div class="d-flex w-100 div-input">
                    <input class="custom-file-input input-field border-0 invalid-feedback" type="file" name="berkas" id="berkas" autocomplete="on" required autofocus value="<?= old('gambar'); ?>" />
                    <label for="berkas" class="d-block custom-file">Gambar</label>
                </div>
            </div>
        </div>
        <div style="margin-top: 1rem">
            <label for="deskripsi" class="d-block input-label">Deskripsi</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="text" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" required autocomplete="on" required autofocus value="<?= $wisata['deskripsi']; ?>" />
                <div style="width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('deskripsi'); ?></h3>
                </div>
            </div>
        </div>
        <div style="margin-top: 1rem">
            <label for="lokasi" class="d-block input-label">Lokasi</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0" type="text" name="lokasi" id="lokasi" placeholder="Masukkan Link Lokasi" minlength="6" required autocomplete="on" required autofocus value="<?= $wisata['lokasi']; ?>" />
                <div style=" width: 50%; margin:20px">
                    <h3 style="background-color: red; font-weight:300; color:white;"><?= $validation->getError('lokasi'); ?></h3>
                </div>

            </div>
            <input type="submit" id="btnSubmit" value="Upload"> </input>
    </form>
</div>
<?= $this->endSection(); ?>