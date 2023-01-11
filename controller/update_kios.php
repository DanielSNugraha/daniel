<?php
include("koneksi.php");

$id = $_POST['id'];
$id_mall = $_POST['id_mall'];
$nama = $_POST['nama'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$status = $_POST['status'];

$insert = mysqli_query($conn, "UPDATE kios SET nama_kios='$nama', ukuran_kios='$ukuran', harga_kios='$harga', id_status='$status' WHERE id_kios='$id'");

header("location:../kios.php?id=$id_mall");
?>