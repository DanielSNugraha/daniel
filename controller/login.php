<?php
include("koneksi.php");
session_start();
$email = $_POST['email'];
$pasw = md5($_POST['pasw']);

$select = mysqli_query($conn, "SELECT * FROM pengguna WHERE username='$email' AND password='$pasw'");

foreach($select as $sel){
    $id_admin = $sel['id_admin'];
    $id_penyewa = $sel['id_penyewa'];
    $id_eo = $sel['id_eo'];

    if(isset($id_admin)){
        $_SESSION['admin'] = $id_admin;
        header("location:../sewa.php");
    }

    if(isset($id_penyewa)){
        $_SESSION['penyewa'] = $id_penyewa;
        header("location:../mall.php");
    }

    if(isset($id_eo)){
        $_SESSION['eo'] = $id_eo;
        header("location:../sewa.php");
    }
}
if(empty($id_admin) && empty($id_eo) && empty($id_penyewa)) {
    header("location:../index.php?login=gagal");
}



?>