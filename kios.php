<?php
include("controller/koneksi.php");
include("header.php");
$id_mall = $_GET['id'];

if(isset($_SESSION['penyewa'])){
  $id_penyewa = $_SESSION['penyewa'];
  $selectSewa = mysqli_query($conn, "SELECT * FROM sewa WHERE id_penyewa='$id_penyewa'");
}
?>

<?php if(isset($_SESSION['admin'])) { 


$select = mysqli_query($conn, "SELECT * FROM kios INNER JOIN status ON status.id_status=kios.id_status WHERE id_mall='$id_mall'");


if(!empty($selectSewa)){
  foreach($selectSewa as $ss){
    $id_sewa = $ss['id_sewa'];
  }
}
?>
  <div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA KIOS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA KIOS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

<div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">DATA KIOS</h3>
                <br></br>
                <a href="form_insert_kios.php?mall=<?=$id_mall;?>" class="btn btn-primary">Tambah Data</a>
                
                
              </div>
              
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id_kios = $sel['id_kios'];
                            $idst = $sel['id_status'];
                    ?>
                    <td><?= $sel['nama_kios'];?></td>
                    <td><?= $sel['ukuran_kios'];?></td>
                    <td><?= $sel['harga_kios'];?></td>
                    <td><?= $sel['nama_status'];?></td>
                    <td>
                        <a href="form_edit_kios.php?id=<?= $id_kios;?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        
                        <a onclick="return confirm('Apakah anda yakin hapus data?')" href="controller/delete_kios.php?id=<?= $id_kios;?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                        
                    </td>
                   
                  </tr>
                        <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php } ?>

    <?php if(isset($_SESSION['penyewa'])) { 
      $select = mysqli_query($conn, "SELECT * FROM kios INNER JOIN status ON status.id_status=kios.id_status WHERE id_mall='$id_mall'");
      $selectGambar= mysqli_query($conn, "SELECT * from mall where id_mall='$id_mall'");
      foreach($selectGambar as $sg){
          $gambar = $sg['peta_kios'];
      }

      if(!empty($selectSewa)){
        foreach($selectSewa as $ss){
          $id_sewa = $ss['id_sewa'];
        }
      }
     
     ?>

<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">PETA KIOS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">PETA KIOS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

<div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">PETA KIOS</h3>
                <br></br>
                
                <!-- <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div> -->
              </div>
              
              <div class="card-body table-responsive p-0">
                  <img src="assets/img/<?= $gambar;?>" style="margin-left:400px"></img>
              </div>
            </div>
            </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA KIOS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA KIOS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

<div class="card">
              <div class="card-header border-0">
                
                <!-- <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div> -->
              </div>
              
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id = $sel['id_kios'];
                            $idst = $sel['id_status'];
                    ?>
                    <td><?= $sel['nama_kios'];?></td>
                    <td><?= $sel['ukuran_kios'];?></td>
                    <td><?= $sel['harga_kios'];?></td>
                    <td><?= $sel['nama_status'];?></td>
                    <td>
                      <?php if($idst=='1'){?>
                        <a href="form_insert_sewa.php?id=<?= $id;?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                      <?php } ?>
                      <?php if($idst<>'1' && $idst<>'2' && isset($id_sewa)){?>
                        
                        <a onclick="return confirm('Apakah anda yakin hapus data?')" href="controller/batal_sewa.php?id=<?= $id;?>" class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                        <?php }  ?>
                      </td>
                   
                  </tr>
                        <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->


  
<?php } ?>
            <?php
include("footer.php");
?>