<?php
include("koneksi.php");

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM eo WHERE id_eo='$id'");
header("location:../eo.php")
?>