<?php
include("controller/koneksi.php");
include("header.php");

$select = mysqli_query($conn, "SELECT * FROM eo");

?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA EO</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA EO</li>
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
                <h3 class="card-title">DATA EO</h3>
                <br></br>
                <a href="form_insert_eo.php" class="btn btn-primary">Tambah Data</a>
                
                
              </div>
              
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id = $sel['id_eo'];
                    ?>
                    <td><?= $sel['nama_eo'];?></td>
                    <td><?= $sel['email_eo'];?></td>
                    <td><?= $sel['no_hp_eo'];?></td>
                    <td>
                        <a href="form_edit_eo.php?id=<?= $id;?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Apakah anda yakin hapus data?')" href="controller/delete_eo.php?id=<?= $id;?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
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
  

            <?php
include("footer.php");
?>