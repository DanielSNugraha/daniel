<?php
include("koneksi.php");

$id = $_GET['id'];

$updatebayar = mysqli_query($conn, "UPDATE pembayaran SET status_bayar='2' WHERE id_pembayaran='$id'");

$select = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
foreach($select as $s){
    $id_sewa = $s['id_sewa'];
}

$selectSewa = mysqli_query($conn, "SELECT * FROM sewa WHERE id_sewa='$id_sewa'");
foreach($selectSewa as $ss){
    $id_kios = $ss['id_kios'];
}

$insert = mysqli_query($conn, "UPDATE kios SET id_status='2' WHERE id_kios='$id_kios'");

header("location:../sewa.php");
?>