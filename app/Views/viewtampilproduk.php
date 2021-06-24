<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="card-header text-white bg-success">
        <h2>Data Produk</h2>
    </div>
    <div class="card">
        <div class="card-body">
            <p>
                <button class="btn btn-success" type="button" onclick="window.location='<?php echo site_url('produk/formtambah') ?>'">
                    Tambah Data
                </button>

            </p>
            <table class="table table-border table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No KTP</th>
                        <th>Nama</th>
                        <th>Judul 1</th>
                        <th>Judul 2</th>
                        <th>Pilih Algoritma</th>
                        <th>Hasil Pencocokan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 0;
                    foreach ($tampildata as $row) :
                        $nomor++;
                    ?>
                        <tr>
                            <th><?= $nomor; ?></th>
                            <th><?= $row->ktp ?></th>
                            <td><?= $row->nama ?></td>
                            <td><?= $row->judul1 ?></td>
                            <td><?= $row->judul2 ?></td>
                            <td><?= $row->algoritma ?></td>
                            <td>Sama</td>
                            <td>
                                <button class="btn btn-warning" type="button" onclick="hapus('<?= $row->ktp ?>')">Hapus</button>
                                <button class="btn btn-danger" type="button" onclick="window.location='<?php echo site_url('produk/formedit/' . $row->ktp) ?>'">Edit</button>
                            </td>
                        </tr>
                    <?php
                    endforeach
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function hapus(ktp) {
            pesan = confirm('Yakin hapus data mahasiswa ?');
            if (pesan) {
                window.location.href = ("<?= site_url('produk/hapus/') ?>") + ktp;
            } else return false;
        }
    </script>

</body>

</html>