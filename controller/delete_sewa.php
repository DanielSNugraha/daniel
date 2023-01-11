<?php
include("koneksi.php");

$id = $_GET['id'];

$select = mysqli_query($conn, "SELECT * FROM sewa WHERE id_sewa='$id'");
foreach($select as $s){
    $id_kios = $s['id_kios'];
}

$update = mysqli_query($conn, "UPDATE kios SET id_status='1' WHERE id_kios='$id_kios'");

$delete = mysqli_query($conn, "DELETE FROM sewa WHERE id_sewa='$id'");
header("location:../sewa.php")
?>