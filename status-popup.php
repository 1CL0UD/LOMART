<?php
include "conn.php";
$id = $_POST['dua'];
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

            $query_mysql = mysqli_query($mysqli, "SELECT * FROM progress_pesanan WHERE id_progress='$id'");
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
            <form action="update-status.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>">
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
                <br>
                <p class="h4">
                    Kode Mesin Cuci
                </p>
                <p class="h6">
                    #
                    <?php echo $data['kode_mesin_cuci'] ?>
                </p>
                <input type="submit" class="btn btn-primary" value="Simpan"></input>
                <?php
            }
            ?>
            </form>
        </div>
    </div>
</div>