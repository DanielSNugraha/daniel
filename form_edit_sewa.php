<?php 
include("header.php");
include("controller/koneksi.php");

$id_sewa = $_GET['id'];
$select = mysqli_query($conn, "SELECT * FROM sewa 
INNER JOIN kios ON kios.id_kios=sewa.id_kios
INNER JOIN penyewa ON penyewa.id_penyewa=sewa.id_penyewa
WHERE id_sewa='$id_sewa'");

foreach($select as $s){
    $kios = $s['nama_kios'];
    $penyewa = $s['nama_penyewa'];
    $id_jenis_sewa=$s['id_jenis_sewa'];
    
    $awal = $s['tgl_awal_sewa'];
    $akhir = $s['tgl_akhir_sewa'];
    
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Sewa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Sewa</li>
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
              <!-- <div class="card-header">
                <h3 class="card-title">Form Edit Kios</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/update_sewa.php">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                      <div class="form-group">
                         <label for="exampleInputEmail1">Nama Kios</label>
                         <input type="text" readonly value="<?= $kios;?>" name="kios" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                        </br>
                        <label for="exampleInputEmail1">Nama Penyewa</label>
                        <input type="text" readonly name="penyewa" value="<?= $penyewa;?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyewa">
                        </br>
                        <input type="hidden" name="id" value="<?= $id_sewa;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Awal Sewa</label>
                        <input type="date" value="<?=$awal;?>" name="awal" class="form-control" id="exampleInputEmail1" placeholder="Awal Sewa">
                        </br>
                        <label for="exampleInputEmail1">Tanggal Akhir Sewa</label>
                        <input type="date" value="<?=$akhir;?>" name="akhir" class="form-control" id="exampleInputEmail1" placeholder="Akhir Sewa">
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
