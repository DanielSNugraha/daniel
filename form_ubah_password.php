<?php 
include("header.php");
include("controller/koneksi.php");

$id = $_GET['id'];

if($_GET['r']==3){
$select = mysqli_query($conn, "SELECT * FROM penyewa INNER JOIN pengguna ON pengguna.id_penyewa=penyewa.id_penyewa WHERE pengguna.id_penyewa='$id'");

foreach($select as $sel){
    $nik = $sel['ktp_penyewa'];
    $nama = $sel['nama_penyewa'];
    $alamat = $sel['alamat_penyewa'];
    $email = $sel['email_penyewa'];
    $hp = $sel['no_hp_penyewa'];
   
    
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Ubah Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Ubah Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Ubah Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
     <form action="controller/update_password.php?r=3" method="post">
        <div class="form-group">
          <input type="text" readonly value="<?= $nik;?> " name="nik" class="form-control" placeholder="NIK">
          
        </div>
        <div class="form-group">
          <input type="text" readonly value="<?= $nama;?>" name="nama" class="form-control" placeholder="Nama Lengkap">
        </div>

        <div class="form-group">
          <input type="text" name="pasw" class="form-control" placeholder="Password baru">
          
        </div>

        
        <div class="row">
          

        <input type="hidden" value="<?= $id;?>" name="id" class="form-control" placeholder="No HP">


          <!-- /.col -->
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Edit</button>
            
          </div>
          <div class="col-2">
          <a href="form_edit_penyewa.php?id=<?=$id;?>&&r=3" class="btn btn-primary btn-block">Batal</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>

<?php } ?>

<?php
if($_GET['r']==1){
$select = mysqli_query($conn, "SELECT * FROM penyewa INNER JOIN pengguna ON pengguna.id_penyewa=penyewa.id_penyewa WHERE pengguna.id_penyewa='$id'");

foreach($select as $sel){
    $nik = $sel['ktp_penyewa'];
    $nama = $sel['nama_penyewa'];
    $alamat = $sel['alamat_penyewa'];
    $email = $sel['email_penyewa'];
    $hp = $sel['no_hp_penyewa'];
   
    
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Ubah Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Ubah Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Ubah Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
     <form action="controller/update_password.php?r=3" method="post">
        <div class="form-group">
          <input type="text" readonly value="<?= $nik;?> " name="nik" class="form-control" placeholder="NIK">
          
        </div>
        <div class="form-group">
          <input type="text" readonly value="<?= $nama;?>" name="nama" class="form-control" placeholder="Nama Lengkap">
        </div>

        <div class="form-group">
          <input type="text" name="pasw" class="form-control" placeholder="Password baru">
          
        </div>

        
        <div class="row">
          

        <input type="hidden" value="<?= $id;?>" name="id" class="form-control" placeholder="No HP">


          <!-- /.col -->
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Edit</button>
            
          </div>
          <div class="col-2">
          <a href="form_edit_penyewa.php?id=<?=$id;?>&&r=3" class="btn btn-primary btn-block">Batal</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>

<?php } ?>


<?php 
include("footer.php");
?>
