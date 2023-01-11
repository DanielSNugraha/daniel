<?php
include("koneksi.php");

$id = $_GET['id'];
$select = mysqli_query($conn, "SELECT * FROM kios WHERE id_kios='$id'");
foreach($select as $s){
    $id_mall = $s['id_mall'];
}

$delete = mysqli_query($conn, "DELETE FROM kios WHERE id_kios='$id'");
header("location:../kios.php?id=$id_mall");
?>