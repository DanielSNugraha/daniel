<?php
include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];

$update = mysqli_query($conn, "UPDATE eo SET nama_eo='$nama', email_eo='$email', no_hp_eo='$hp' WHERE id_eo='$id'");

header("location:../eo.php");
?>