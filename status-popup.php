<?php
include "conn.php";
$id = $_POST['dua'];
$nama_customer = $_POST['nama'];
$pesanan = $_POST['pesanan'];
$hari = $_POST['hari'];
$jumlah = $_POST['jumlah'];
$id = $_POST['dua'];
$hari = $_POST['hari'];
$jumlah = $_POST['jumlah'];
$cuci = $_POST['cuci'];
$setrika = $_POST['setrika'];
$kirim = $_POST['kirim'];
$kode_mc = $_POST['mc'];
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lomart</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<div class="container">
    <div class="card">
        <br>
        <div class="card-body">
            <h5 class="card-title">Ubah Status</h5>
            <?php

            $query_mysql = mysqli_query($mysqli, "SELECT * FROM pesanan WHERE id_pesanan='$id'");
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <form action="update-status.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id ?>"></input>
                    <input type="hidden" name="nama" value="<?php echo $nama_customer ?>"></input>
                    <input type="hidden" name="pesanan" value="<?php echo $pesanan ?>"></input>
                    <input type="hidden" name="hari" value="<?php echo $hari ?>"></input>
                    <input type="hidden" name="jumlah" value="<?php echo $jumlah ?>"></input>
                    <input type="hidden" name="cuci" value="<?php echo $cuci ?>"></input>
                    <input type="hidden" name="setrika" value="<?php echo $setrika ?>"></input>
                    <input type="hidden" name="kirim" value="<?php echo $progkirim ?>"></input>
                    <input type="hidden" name="mc" value="<?php echo $kode_mc ?>"></input>
                    <br>
                    <div class="row w-25">
                        <span class="align-middle">
                            <input type="number" name="cuci" class="form-control" placeholder="Angka 1-100"
                                required></input>
                            <label for="cuci">Cuci</label>
                        </span>
                    </div>
                    <br>
                    <div class="row w-25">
                        <span class="align-middle">
                            <input type="number" name="setrika" class="form-control" placeholder="Angka 1-100"
                                required></input>
                            <label for="setrika">Gosok</label>
                        </span>
                    </div>
                    <div class="row w-25">
                        <span class="align-middle">
                            <input type="number" name="kirim" class="form-control" placeholder="Angka 1-100"
                                required></input>
                            <label for="kirim">Kirim</label>
                        </span>
                    </div>
                    <br>
                    <p class="h4">
                        Kode Mesin Cuci
                    </p>
                    <p class="h6">
                        #
                        <?php echo $data['kode_mc'] ?>
                    </p>
                    <input type="submit" class="btn btn-primary" value="Simpan"></input>
                    <?php
            }
            ?>
            </form>
        </div>
    </div>
</div>