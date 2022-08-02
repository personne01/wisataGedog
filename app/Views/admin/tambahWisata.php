<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    input[type=text],
    input[type=password],
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
        background-color: var(--blue);
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
    <h3>Tambah Wisata</h3>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger" role="alert">
            <h4>Periksa Entrian Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form action="/Admin/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div style="margin-bottom: 1.75rem">
            <label for="namaWisata" class="d-block input-label">Nama Wisata</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="text" name="namaWisata" id="namaWisata" placeholder="Masukkan Nama Wisata" autocomplete="on" required autofocus value="<?= old('namaWisata'); ?>" />

            </div>
        </div>
        <div style="margin-bottom: 1.75rem">
            <div class="d-flex w-100 div-input">
                <input class="custom-file-input input-field border-0 invalid-feedback" type="file" name="berkas" id="berkas" autocomplete="on" required autofocus value="<?= old('gambar'); ?>" />
                <label for="berkas" class="d-block custom-file">Gambar</label>
            </div>
        </div>
        <div style="margin-bottom: 1.75rem">
            <label for="deskripsi" class="d-block input-label">Deskripsi Wisata</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="text" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" autocomplete="on" required autofocus value="<?= old('deskripsi'); ?>" />
            </div>
        </div>
        <div style="margin-bottom: 1.75rem">
            <label for="lokasi" class="d-block input-label">Maps lokasi Wisata</label>
            <div class="d-flex w-100 div-input">
                <input class="input-field border-0 invalid-feedback" type="text" name="lokasi" id="lokasi" placeholder="Masukkan Link Lokasi" autocomplete="on" required autofocus value="<?= old('lokasi'); ?>" />

            </div>
        </div>
        <input type="submit" id="btnSubmit" value="Upload" />
    </form>
</div>
<?= $this->endSection(); ?>