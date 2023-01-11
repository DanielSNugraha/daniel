<?php
include("koneksi.php");

$id = $_POST['id'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];


$insert = mysqli_query($conn, "UPDATE sewa SET tgl_awal_sewa='$awal', tgl_akhir_sewa='$akhir' WHERE id_sewa='$id'");

header("location:../sewa.php");
?>