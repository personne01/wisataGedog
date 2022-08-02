<?=
$page = 'profile';
$this->extend('admin\layout\template');
?>

<?= $this->section('content'); ?>
<div class="content">
    <style>
        .addWisata {
            margin-top: 50px;
            display: flex;
            flex-direction: row;
        }

        .addWisata .btn-add {
            margin-right: 20px;
            font-weight: bolder;
            margin-bottom: 20px;
            display: flex;
            padding: 5px;
            background-color: var(--blue);
            border-radius: 10px;
            text-decoration: none;
            color: white;
        }

        .addWisata .btn-add button {
            margin-right: 20px;
        }

        .addWisata h4 {
            margin: auto 0;

        }

        a {
            background-color: none;
        }

        table {
            width: calc(100% - 100px);
            border-collapse: collapse;
        }

        tr:nth-child(even) {
            background-color: #ddd;
        }

        th {
            padding: 15px;
            text-align: left;
            border-bottom: 3px solid black;
        }

        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid black;
        }

        ion-icon {
            cursor: pointer;
            font-size: large;
            width: 50px;
        }

        ion-icon:hover {
            color: var(--green);
            font-weight: bolder;
            transition: 0.5s;
        }

        .navgroup button:hover {
            background-color: var(--green);
            border: none;
        }


        .navgroup a {
            text-decoration: none;
        }

        .navgroup a button {
            text-decoration: none;
            font-size: larger;
            font-weight: bolder;
            color: black;
        }

        @media(max-width:1000px) {
            .navgroup {
                position: relative;
                margin: 0;
            }

            .navgroup button {
                width: 100%;
                display: inline;
                width: 50%;
                border-radius: 10px;
            }
        }
    </style>
    <div class="mx-auto d-flex flex-lg-row flex-column hero">
        <div style="width:50%; font-size: large; background-color: var(--green); margin-top: 20px;">
            <?php if (session()->getFlashdata('success')) : ?>
                <?= session()->getFlashdata('success'); ?>
            <?php endif; ?>
            <?php if (session()->getFlashdata('update')) : ?>
                <?= session()->getFlashdata('update'); ?>
            <?php endif; ?>
        </div>
        <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
            <div class="text-center">
                <h1 class="text-title">Data Wisata Gedog</h1>
            </div>
            <div class="addWisata">
                <a href="/admin/tambahWisata" class="btn-add">
                    <button>
                        <ion-icon name="add-outline"></ion-icon>
                    </button>
                    <h4>Tambah Wisata</h4>
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($wisata as $i) : ?>
                        <tr>
                            <td><?= $i['id']; ?></td>
                            <td><?= $i['nama_wisata']; ?></td>
                            <td><img src="<?= base_url('uploads/' . $i['gambar']); ?>" alt="" width="200px" height="200px"></td>
                            <td><?= $i['deskripsi']; ?></td>
                            <td><?= $i['lokasi']; ?></td>
                            <td>
                                <button>
                                    <a href="" class="btn-warning">
                                        <a href="/admin/editWisata/<?= $i['id']; ?>">
                                            <ion-icon name="create"></ion-icon>
                                        </a>
                                    </a>
                                </button>

                                <button>
                                    <form action="<?= site_url('/') ?>/admin/delete/<?= $i['id']; ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" onclick="return confirm('Apakah anda yakin menghapus data tersebut');">
                                            <ion-icon name="trash"></ion-icon>
                                        </button>
                                    </form>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>