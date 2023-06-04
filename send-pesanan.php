<?php
include "conn.php";
// $id_pesanan = $_POST['id'];
$nama_customer = $_POST['nama'];
$pesanan = $_POST['pesanan'];
$berat = $_POST['berat'];
$jumlah = $berat * 7000;

$sql = "INSERT INTO `pesanan`(`id_pesanan`, `nama_customer`, `pesanan`, `hari`, `jumlah`, `prog_cuci`, `prog_setrika`, `prog_kirim`, `kode_mc`) VALUES ('','$nama_customer','$pesanan','Hari Ini','$jumlah','','','','')";

if (mysqli_query($mysqli, $sql)) {
    echo "Edited successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: index.php');
exit();
?>