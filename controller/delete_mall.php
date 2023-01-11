<?php
include("koneksi.php");

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM mall WHERE id_mall='$id'");
header("location:../mall.php")
?>