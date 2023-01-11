<?php
include("koneksi.php");

if(empty($_POST['bukti_bayar'])){
    
$id_sewa = $_POST['id_sewa'];
$tgl_bayar = date("Y-m-d");

$ekstensi_diperbolehkan = array('png', 'jpg');
$nama_file = $_FILES['file']['name'];
$x = explode('.', $nama_file);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];	

if(in_array($ekstensi, $ekstensi_diperbolehkan)===true){
    if($ukuran<1044070){
        move_uploaded_file($file_tmp, '../assets/bayar/'.$nama_file);
        $insert = mysqli_query($conn, "INSERT INTO pembayaran(id_sewa, tgl_pembayaran, bukti_pembayaran, status_bayar) VALUES('$id_sewa', '$tgl_bayar', '$nama_file','1')");
        header("location:../pembayaran.php");
    }
} 
else{
header("location:../form_insert_pembayaran.php?id=$id_sewa");
}
}


if(isset($_POST['bukti_bayar'])){

    $id_pembayaran = $_POST['id_pembayaran'];
    $bukti = $_POST['bukti_bayar'];
    $id_sewa = $_POST['id_sewa'];
    $tgl_bayar = date("Y-m-d");

    $ekstensi_diperbolehkan = array('png', 'jpg');
    $nama_file = $_FILES['file']['name'];
    $x = explode('.', $nama_file);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];	

if(in_array($ekstensi, $ekstensi_diperbolehkan)===true){
    if($ukuran<1044070){
        move_uploaded_file($file_tmp, '../assets/bayar/'.$nama_file);
        $insert = mysqli_query($conn, "UPDATE pembayaran SET tgl_pembayaran='$tgl_bayar', bukti_pembayaran='$nama_file' WHERE id_pembayaran='$id_pembayaran'");
        header("location:../pembayaran.php");
    }
} 
else{
header("location:../form_insert_pembayaran.php?id=$id_sewa");
}


}


?>