<?php
include("controller/koneksi.php");
include("header.php");

$select = mysqli_query($conn, "SELECT * FROM mall");

?>

<?php if(isset($_SESSION['admin'])) { ?>
  <div class="content-wrapper">

 
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA MALL</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA MALL</li>
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
                <div class="float-right">
                  <a href="form_insert_mall.php" class="btn btn-primary"><b>+ Tambah Data</b></a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id = $sel['id_mall'];
                            
                    ?>
                    <td><?= $sel['nama_mall'];?></td>
                    <td><?= $sel['alamat_mall'];?></td>
                    <td>
                        <a href="form_edit_mall.php?id=<?= $id;?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                        <a onclick="return confirm('Apakah anda yakin hapus data?')" href="controller/delete_mall.php?id=<?= $id;?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        <a href="kios.php?id=<?= $id;?>" class="btn btn-success"><i class="fa fa-building"></i> List Kios</a>
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

    <?php if(isset($_SESSION['penyewa'])) { ?>

        <div class="content-wrapper">

 
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA MALL</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA MALL</li>
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
                <h3 class="card-title">DATA MALL</h3>
                <br></br>
                 
                
              </div>
              
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id = $sel['id_mall'];
                            
                    ?>
                    <td><?= $sel['nama_mall'];?></td>
                    <td><?= $sel['alamat_mall'];?></td>
                    <td>
                        <a href="kios.php?id=<?= $id;?>" class="btn btn-success"><i class="fa fa-building"></i> List Kios</a>
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