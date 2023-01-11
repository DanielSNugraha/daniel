<?php
include("koneksi.php");

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM penyewa WHERE id_penyewa='$id'");
header("location:../penyewa.php")
?>