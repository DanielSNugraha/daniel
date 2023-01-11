<?php 
include("header.php");
include("controller/koneksi.php");

$id_kios = $_GET['id'];
$id_penyewa = $_SESSION['penyewa'];
$select = mysqli_query($conn, "SELECT * FROM kios 
INNER JOIN status ON status.id_status=kios.id_status
WHERE id_kios='$id_kios'");

$selectPenyewa = mysqli_query($conn, "SELECT * FROM penyewa WHERE id_penyewa='$id_penyewa'");

foreach($selectPenyewa as $sp){
    $nik = $sp['ktp_penyewa'];
    $nama = $sp['nama_penyewa']; 
}

foreach($select as $s){
    $kios = $s['nama_kios'];
    $harga = $s['harga_kios'];
    $id_mall = $s['id_mall'];
    
    
    
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input SEWA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Iput Sewa</li>
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
                <h3 class="card-title">Form Input Sewa</h3>
                
              </div>
              <br></br>
              <?php if(isset($_GET['pesan'])&&$_GET['pesan']=="true"){?>
              <span class="alert alert-danger">MINIMAL SEWA 30 HARI !</span>
              <?php } ?>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/insert_sewa.php">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kios</label>
                    <input type="text" readonly style="width: 200px;" value="<?= $kios;?>" name="kios" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" readonly style="width: 200px;" value="<?= $harga;?>" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">KTP Penyewa</label>
                    <input type="text" readonly style="width: 200px;" name="nik" value="<?= $nik;?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyewa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penyewa</label>
                    <input type="text" readonly style="width: 200px;" name="penyewa" value="<?= $nama;?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyewa">
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Awal Sewa</label>
                    <input type="date" name="awal" style="width: 200px;" class="form-control" id="exampleInputEmail1" placeholder="Awal Sewa">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Akhir Sewa</label>
                    <input type="date"  name="akhir" style="width: 200px;" class="form-control" id="exampleInputEmail1" placeholder="Akhir Sewa">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Usaha</label>
                    <textarea type="text" name="usaha" style="width: 200px;" class="form-control" id="exampleInputEmail1" placeholder="Jenis Usaha"></textarea>
                  </div>

                  <input type="hidden" name="id_kios" value="<?= $id_kios;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  <input type="hidden" name="id_penyewa" value="<?= $id_penyewa;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
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
