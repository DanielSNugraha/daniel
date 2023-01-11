<?php
include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if(!empty($_FILES['map'])){
$ekstensi_diperbolehkan = array('png', 'jpg');
$nama_file = $_FILES['map']['name'];
$x = explode('.', $nama_file);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['map']['size'];
$file_tmp = $_FILES['map']['tmp_name'];	

if(in_array($ekstensi, $ekstensi_diperbolehkan)===true){
    if($ukuran<1044070){
        move_uploaded_file($file_tmp, '../assets/img/'.$nama_file);
        $insert = mysqli_query($conn, "UPDATE mall SET nama_mall='$nama', alamat_mall='$alamat', peta_kios='$nama_file' WHERE id_mall='$id'");

        header("location:../mall.php");
    }
} 
else{
header("location:../form_insert_mall.php");
}
}

if(empty($_FILE['map'])){
    $insert = mysqli_query($conn, "UPDATE mall SET nama_mall='$nama', alamat_mall='$alamat' WHERE id_mall='$id'");

    header("location:../mall.php");

}
?>