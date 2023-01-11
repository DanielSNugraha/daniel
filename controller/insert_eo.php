<?php
include("koneksi.php");

$nama = $_POST['nama'];
$email = $_POST['email'];
$pasw = md5($_POST['pasw']);
$hp = $_POST['hp'];

$insert = mysqli_query($conn, "INSERT INTO eo(nama_eo, email_eo, no_hp_eo) VALUES('$nama', '$email', '$hp')");
$select = mysqli_query($conn, "SELECT id_eo FROM eo WHERE nama_eo='$nama' AND email_eo='$email'");

foreach($select as $sel){
    $id_eo = $sel['id_eo'];
}

$insertPengguna = mysqli_query($conn, "INSERT INTO pengguna(id_eo, username, password) VALUES('$id_eo', '$email','$pasw')");
header("location:../eo.php");
?>