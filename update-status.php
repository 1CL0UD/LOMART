<?php
include "conn.php";
$id_progress = $_POST['id'];
$cuci = $_POST['cuci'];
$setrika = $_POST['setrika'];
$sql = "UPDATE `progress_pesanan` SET `cuci`='$cuci',`setrika` = '$setrika' WHERE `id_progress`='$id_progress'";

if (mysqli_query($mysqli, $sql)) {
    echo "Edited successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: pesanan-kasir.php');
exit();
?>