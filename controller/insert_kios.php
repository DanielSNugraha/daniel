<?php
include("koneksi.php");

$id_mall = $_POST['id_mall'];
$nama = $_POST['nama'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$status = $_POST['status'];

$insert = mysqli_query($conn, "INSERT INTO kios(nama_kios, ukuran_kios, harga_kios, id_status, id_mall) VALUES('$nama', '$ukuran', '$harga', '$status', '$id_mall')");

header("location:../kios.php?id=$id_mall");
?>