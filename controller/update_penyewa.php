<?php

include("koneksi.php");
session_start();

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

if(isset($_SESSION['admin'])){
$update = mysqli_query($conn, "UPDATE penyewa SET ktp_penyewa='$nik', nama_penyewa='$nama', alamat_penyewa='$alamat', email_penyewa='$email', no_hp_penyewa='$hp' WHERE id_penyewa='$id'");
header("location:../penyewa.php");
}

if(isset($_SESSION['penyewa'])){
    $update = mysqli_query($conn, "UPDATE penyewa SET ktp_penyewa='$nik', nama_penyewa='$nama', alamat_penyewa='$alamat', email_penyewa='$email', no_hp_penyewa='$hp' WHERE id_penyewa='$id'");
    header("location:../form_edit_penyewa.php?id=$id&&pesan=true");  
}
?>