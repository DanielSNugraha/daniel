<?php
include("controller/koneksi.php");
include("header.php");

$select = mysqli_query($conn, "SELECT * FROM penyewa");

?>

<?php if(isset($_SESSION['admin'])) { ?>
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA PENYEWA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA PENYEWA</li>
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
                <h3 class="card-title">DATA PENYEWA</h3>
                <br></br>
                <a href="form_insert_penyewa.php" class="btn btn-primary">Tambah Data</a>
                
               
              </div>
              
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                        foreach($select as $sel){
                            $id = $sel['id_penyewa'];
                            
                    ?>
                    <td><?= $sel['ktp_penyewa'];?></td>
                    <td><?= $sel['nama_penyewa'];?></td>
                    <td><?= $sel['alamat_penyewa'];?></td>
                    <td><?= $sel['email_penyewa'];?></td>
                    <td><?= $sel['no_hp_penyewa'];?></td>
                    <td>
                        <a href="form_edit_penyewa.php?id=<?= $id;?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Apakah anda yakin hapus data?')" href="controller/delete_penyewa.php?id=<?= $id;?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
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