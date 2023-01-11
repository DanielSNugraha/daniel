<?php
include("koneksi.php");

$kios = $_POST['id_kios'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];
$penyewa = $_POST['id_penyewa'];
$usaha = $_POST['usaha'];
$id_mall = $_POST['id_mall'];

$dt1 = date_create($_POST['awal']);
$dt2 = date_create($_POST['akhir']);
$selisih = date_diff($dt1, $dt2);
$day = $selisih->format("%d%");
$month = $selisih->format("%m%");
$hari = $day + $month*30;

if($hari>=30){
$insert = mysqli_query($conn, "INSERT INTO sewa(id_kios, tgl_awal_sewa, tgl_akhir_sewa, id_penyewa, jenis_usaha) VALUES('$kios',  '$awal', '$akhir', '$penyewa', '$usaha')");
$update = mysqli_query($conn, "UPDATE kios SET id_status='3' WHERE id_kios='$kios'");
header("location:../kios.php?id=$id_mall");
}

if($hari<30){
    header("location:../form_insert_sewa.php?id=$kios&&pesan=true");
}
?>