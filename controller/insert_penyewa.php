<?php
include("koneksi.php");
session_start();

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pasw = md5($_POST['pasw']);
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

$insert = mysqli_query($conn, "INSERT INTO penyewa(ktp_penyewa, nama_penyewa, email_penyewa, no_hp_penyewa, alamat_penyewa) VALUES('$nik', '$nama', '$email', '$hp', '$alamat')");
$select = mysqli_query($conn, "SELECT id_penyewa FROM penyewa WHERE ktp_penyewa='$nik' AND email_penyewa='$email'");

foreach($select as $sel){
    $id_penyewa = $sel['id_penyewa'];
}
if(!isset($_SESSION['admin'])){
$insertPengguna = mysqli_query($conn, "INSERT INTO pengguna(id_penyewa, username, password) VALUES('$id_penyewa', '$email','$pasw')");
header("location:../index.php");
}

if(isset($_SESSION['admin'])){
    $insertPengguna = mysqli_query($conn, "INSERT INTO pengguna(id_penyewa, username, password) VALUES('$id_penyewa', '$email','$pasw')");
    header("location:../penyewa.php");
    }
?>