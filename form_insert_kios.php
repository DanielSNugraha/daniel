<?php 
include("header.php");

if(isset($_GET['mall'])){
  $id_mall = $_GET['mall'];

  $selectMall = mysqli_query($conn, "SELECT * FROM mall WHERE id_mall='$id_mall'");
  foreach($selectMall as $sm){
    $nama_mall = $sm['nama_mall'];
    $peta_kios = $sm['peta_kios'];
  }

}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PETA KIOS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">PETA KIOS</li>
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
                <h3 class="card-title">PETA KIOS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="assets/img/<?= $peta_kios;?>" width="700" height="500" style="margin-left:400px"></img>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input KIOS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Input KIOS</li>
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
                <h3 class="card-title">Form Input KIOS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/insert_kios.php">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mall</label>
                    <input type="text" style="width: 200px;" name="nama_mall" readonly value="<?= $nama_mall;?>" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                    <input type="hidden" name="id_mall" readonly value="<?= $id_mall;?>" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kios</label>
                    <input type="text" style="width: 200px;" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran Kios</label>
                    <input type="text" style="width: 200px;" name="ukuran" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Kios</label>
                    <input type="number" style="width: 200px;" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Harga (Rp)">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" name="status" style="width: 200px;">
                        <option value="">--PILIH STATUS--</option>
                        <option value="1">TERSEDIA</option>
                        <option value="2">DISEWA</option>
                    </select>
                  </div>

                  
                  
                  <input type="hidden" name="id" value="<?= $id_mall;?>"  class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  
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
