<?php
include("koneksi.php");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$ekstensi_diperbolehkan = array('png', 'jpg');
$nama_file = $_FILES['map']['name'];
$x = explode('.', $nama_file);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['map']['size'];
$file_tmp = $_FILES['map']['tmp_name'];	

if(in_array($ekstensi, $ekstensi_diperbolehkan)===true){
    if($ukuran<1044070){
        move_uploaded_file($file_tmp, '../assets/img/'.$nama_file);
        $insert = mysqli_query($conn, "INSERT INTO mall(nama_mall, alamat_mall, peta_kios) VALUES('$nama', '$alamat', '$nama_file')");

        header("location:../mall.php");
    }
} 
else{
header("location:../form_insert_mall.php");
}

?>