<?php
include("koneksi.php");
session_start();

if(isset($_SESSION['penyewa'])){
$id = $_GET['id'];

$insert = mysqli_query($conn, "UPDATE kios SET id_status='1' WHERE id_kios='$id'");
$delete = mysqli_query($conn, "DELETE FROM sewa WHERE id_kios='$id'");


header("location:../mall.php");
}

if(isset($_SESSION['eo'])){
    $id = $_GET['id'];

    $select = mysqli_query($conn, "SELECT * FROM sewa WHERE id_sewa='$id'");

    foreach($select as $sel){
        $id_kios = $sel['id_kios'];
    }
    
    $insert = mysqli_query($conn, "UPDATE kios SET id_status='1' WHERE id_kios='$id_kios'");
    $delete = mysqli_query($conn, "DELETE FROM sewa WHERE id_sewa='$id'");
    
    
    header("location:../sewa.php");
    }
?>