<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Judul</title>
</head>
<style>
    input[type=text],
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

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    h2 {
        text-align: center;
    }
</style>

<body>
    <h2>Form Edit Pencocokan</h2>
    <p>

    </p>
    <p>
        <?= form_open('produk/updatedata') ?>
    <table>
        <div class="container">
            <div>
                <form action="/action_page.php">
                    <label>No KTP :</label>
                    <input type="text" name="ktp" placeholder="No KTP" value="<?= $ktp; ?>">

                    <label>Nama Lengkap :</label>
                    <input type="text" name="nama" placeholder="Your name.." value="<?= $nama; ?>">

                    <label>Judul 1 :</label>
                    <input type="text" name="judul1" placeholder="Title 1.." value="<?= $judul1; ?>">

                    <label>Judul 2 :</label>
                    <input type="text" name="judul2" placeholder="Title 2.." value="<?= $algoritma; ?>">

                    <label>Pilih Algortima</label>
                    <select name="algoritma">
                        <option value="K-NN">K-NN</option>
                        <option value="SVM">SVM</option>
                        <option value="Decision Trees">Decision Trees</option>
                    </select>

                    <input type="submit" value="Update Data">
                    <button type="button" onclick="window.location='<?php echo site_url('produk/index') ?>'">
                        Kembali
                    </button>
                </form>
            </div>
        </div>
    </table>
    <?= form_close(); ?>
    </p>
</body>

</html>