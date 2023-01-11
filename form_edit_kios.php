<?php 
include("header.php");
include("controller/koneksi.php");

$id_kios = $_GET['id'];
$select = mysqli_query($conn, "SELECT * FROM kios INNER JOIN status ON status.id_status=kios.id_status WHERE id_kios='$id_kios'");
foreach($select as $s){
    $nama = $s['nama_kios'];
    $ukuran = $s['ukuran_kios'];
    $harga = $s['harga_kios'];
    $status = $s['id_status'];
    $namast = $s['nama_status'];
    $id_mall = $s['id_mall'];
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit KIOS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Edit KIOS</li>
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
                <h3 class="card-title">Form Edit KIOS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/update_kios.php">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kios</label>
                    <input type="text" readonly style="width: 200px;" value="<?= $nama;?>" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran Kios</label>
                    <input type="text" style="width: 200px;" name="ukuran" value="<?= $ukuran;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Kios</label>
                    <input type="number"  style="width: 200px;" value="<?=$harga;?>" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Harga (Rp)">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" name="status" style="width: 200px;">
                        <option value="<?= $status;?>"><?= $namast;?>-</option>
                        <option value="1">TERSEDIA</option>
                        <option value="2">DISEWA</option>
                    </select>
                  </div>

                  <input type="hidden" name="id" value="<?= $id_kios;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  <input type="hidden" name="id_mall" value="<?= $id_mall;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  
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
