<?php
include("controller/koneksi.php");
include("header.php");

?>

<?php if(isset($_SESSION['admin'])){ 
$select = mysqli_query($conn, "SELECT * FROM sewa 
INNER JOIN kios ON kios.id_kios=sewa.id_kios
INNER JOIN mall ON mall.id_mall = kios.id_mall
INNER JOIN penyewa ON penyewa.id_penyewa=sewa.id_penyewa");  
  
?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA SEWA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA SEWA</li>
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
                <!-- <h3 class="card-title">DATA SEWA</h3> -->
                <!-- <br></br>
                
                 -->
              </div>
              
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nama Kios</th>
                    <th>Nama Penyewa</th>
                    
                    <th>Tanggal Awal Sewa</th>
                    <th>Tanggal Akhir Sewa</th>
                    <th>Status Sewa</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id = $sel['id_sewa'];
                            $idst = $sel['id_status'];

                            if($idst==1){
                              $status = "<p class='text-secondary text-bold pt-2'>SEWA TIDAK AKTIF</p>";
                            }

                            if($idst==2){
                              $status = "<p class='text-success text-bold pt-2'>SEWA AKTIF</p>";
                            }

                            if($idst==3){
                              $status = "<p class='text-primary text-bold pt-2'>BOOKING</p>";
                            }
                    ?>
                    <td><?= $sel['nama_kios'];?></td>
                    <td><?= $sel['nama_penyewa'];?></td>
                    
                    <td><?= $sel['tgl_awal_sewa'];?></td>
                    <td><?= $sel['tgl_akhir_sewa'];?></td>
                    <td><?= $status?></td>
                    <td>
                        <a href="form_edit_sewa.php?id=<?= $id;?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                        <a onclick="return confirm('Apakah anda yakin hapus data?')" href="controller/delete_sewa.php?id=<?= $id;?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
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

    <?php if(isset($_SESSION['penyewa'])){ 
      $id_penyewa = $_SESSION['penyewa'];
      $select = mysqli_query($conn, "SELECT * FROM sewa 
      INNER JOIN kios ON kios.id_kios=sewa.id_kios
      INNER JOIN mall ON mall.id_mall = kios.id_mall
      INNER JOIN penyewa ON penyewa.id_penyewa=sewa.id_penyewa
      WHERE sewa.id_penyewa='$id_penyewa'");
      
      ?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA SEWA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA SEWA</li>
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
                <h3 class="card-title">DATA SEWA</h3>
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
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nama Kios</th>
                    <th>Nama Penyewa</th>
                    
                    <th>Tanggal Awal Sewa</th>
                    <th>Tanggal Akhir Sewa</th>
                    <th>Status Sewa</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id = $sel['id_sewa'];
                            $idst = $sel['id_status'];
                            if($idst==2){
                              $status = "SEWA AKTIF";
                            }

                            if($idst==3){
                              $status = "BOOKING";
                            }
                    ?>
                    <td><?= $sel['nama_kios'];?></td>
                    <td><?= $sel['nama_penyewa'];?></td>
                    
                    <td><?= $sel['tgl_awal_sewa'];?></td>
                    <td><?= $sel['tgl_akhir_sewa'];?></td>
                    <td><?= $status;?>
                    
                   
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

    <?php if(isset($_SESSION['eo'])){ 
      $id_penyewa = $_SESSION['eo'];
      $select = mysqli_query($conn, "SELECT * FROM sewa 
      INNER JOIN kios ON kios.id_kios=sewa.id_kios
      INNER JOIN penyewa ON penyewa.id_penyewa=sewa.id_penyewa
      INNER JOIN status ON status.id_status=kios.id_status
      WHERE kios.id_status='3' OR kios.id_status='2'");
      
      ?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA SEWA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA SEWA</li>
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
                <h3 class="card-title">DATA SEWA</h3>
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
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nama Kios</th>
                    <th>Nama Penyewa</th>
                    <th>tanggal awal sewa</th>
                    <th>tanggal akhir sewa</th>
                    <th>status</th>
                    <th>aksi</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id = $sel['id_sewa'];
                    ?>
                    <td><?= $sel['nama_kios'];?></td>
                    <td><?= $sel['nama_penyewa'];?></td>
                    <td><?= $sel['tgl_awal_sewa'];?></td>
                    <td><?= $sel['tgl_akhir_sewa'];?></td>
                    <td><?= $sel['nama_status'];?></td>
                    <td>
                        <a href="form_insert_pembayaran.php?id=<?=$id;?>" class="btn btn-primary">Lihat Detil</i></a>
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