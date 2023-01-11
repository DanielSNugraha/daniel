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
              <div class="card-header">
                <h3 class="card-title">Form Input MALL</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/update_mall.php" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mall</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" style="width:300px" value="<?= $nama;?>" placeholder="Nama Mall">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Mall</label>
                    <textarea type="text" name="alamat" class="form-control" style="width:300px" id="exampleInputEmail1" value="<?= $alamat;?>" placeholder="Alamar Lengkap"><?= $alamat;?></textarea>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Peta Kios</label>
                    <br></br>
                    <img src="assets/img/<?= $peta;?>" width="200" height="200"></img>

                    <input type="file" style="width:300px" name="map" class="form-control" id="exampleInputEmail1" placeholder="Peta Kios">
                  </div>

                  <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="<?= $id_mall;?>" >
                  <input type="hidden" name="peta_kios" class="form-control" id="exampleInputEmail1" value="<?= $peta;?>" >
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
