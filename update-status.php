<?php
include "conn.php";
$id_pesanan = $_POST['id'];
$nama_customer = $_POST['nama'];
$pesanan = $_POST['pesanan'];
$hari = $_POST['hari'];
$jumlah = $_POST['jumlah'];
$hari = $_POST['hari'];
$jumlah = $_POST['jumlah'];
$cuci = $_POST['cuci'];
$setrika = $_POST['setrika'];
$kirim = $_POST['kirim'];
$kode_mc = $_POST['mc'];
$sql = "UPDATE `pesanan` SET `nama_customer`='$nama_customer',`pesanan`='$pesanan',`hari`='$hari',`jumlah`='$jumlah', `kode_mc`='$kode_mc', `prog_cuci`='$cuci',`prog_setrika` = '$setrika', `prog_kirim` = '$kirim' WHERE `id_pesanan`='$id_pesanan'";

if (mysqli_query($mysqli, $sql)) {
    echo "Edited successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: pesanan-kasir.php');
exit();
?>