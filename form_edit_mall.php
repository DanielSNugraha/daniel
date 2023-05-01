<?php 
include("header.php");
include("controller/koneksi.php");
$id_mall = $_GET['id'];
$select = mysqli_query($conn, "SELECT * FROM mall WHERE id_mall='$id_mall'");
foreach($select as $s){
    $nama = $s['nama_mall'];
    $alamat = $s['alamat_mall'];
    $peta = $s['peta_kios'];
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input MALL</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Input MALL</li>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/update_mall.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Peta Kios</label>
                    <br></br>
                    <img class="mx-auto d-block" src="assets/img/<?= $peta;?>" width="60%" height="100%"></img>
      
                    <input type="file" name="map" class="form-control" id="exampleInputEmail1" placeholder="Peta Kios">

                    <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="<?= $id_mall;?>" >
                    <input type="hidden" name="peta_kios" class="form-control" id="exampleInputEmail1" value="<?= $peta;?>" >
                  </div>
                  <div class="row">
                        <div class="col-sm">
                          <div class="form-group">
                             <label for="exampleInputEmail1">Nama Mall</label>
                             <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?= $nama;?>" placeholder="Nama Mall">
                           </div>
                        </div>
                        <div class="col-sm">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Alamat Mall</label>
                              <textarea type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="<?= $alamat;?>" placeholder="Alamar Lengkap"><?= $alamat;?></textarea>
                          </div>
                        </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>


<?php 
include("footer.php");
?>
