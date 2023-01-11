<?php 

include("koneksi.php");

$r = $_GET['r'];
$id = $_POST['id'];
$pasw = md5($_POST['pasw']);

if($r==3){

    $update = mysqli_query($conn, "UPDATE pengguna SET password='$pasw' WHERE id_penyewa='$id'");
    header("location:../form_edit_penyewa.php?id=$id");
}

if($r==1){

    $update = mysqli_query($conn, "UPDATE pengguna SET password='$pasw' WHERE id_penyewa='$id'");
    header("location:../penyewa.php");
}
 




?>