<?php 
include("header.php");
include("controller/koneksi.php");

$id_sewa = $_GET['id'];

if(isset($_SESSION['penyewa'])){
$id_penyewa = $_SESSION['penyewa'];

$select = mysqli_query($conn, "SELECT * FROM sewa
                                INNER JOIN kios ON kios.id_kios=sewa.id_kios
                                INNER JOIN penyewa ON penyewa.id_penyewa=sewa.id_penyewa
                                WHERE id_sewa='$id_sewa' AND penyewa.id_penyewa='$id_penyewa'");

foreach($select as $sel){

    $kios = $sel['nama_kios'];
    $harga = $sel['harga_kios'];
    $nik = $sel['ktp_penyewa'];
    $awal = $sel['tgl_awal_sewa'];
    $akhir = $sel['tgl_akhir_sewa'];
    $usaha = $sel['jenis_usaha'];
    $nama_penyewa = $sel['nama_penyewa'];
}

$selectPembayaran = mysqli_query($conn, "SELECT * FROM pembayaran INNER JOIN sewa ON sewa.id_sewa=pembayaran.id_sewa WHERE sewa.id_sewa='$id_sewa'");

if(!empty($selectPembayaran)){
foreach($selectPembayaran as $sb){
    $id_pembayaran = $sb['id_pembayaran'];
    $tgl_pembayaran = $sb['tgl_pembayaran'];
    $bukti = $sb['bukti_pembayaran'];
}
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Pembayaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Input Pembayaran</li>
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
                <h3 class="card-title">Form Input Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/insert_pembayaran.php" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kios</label>
                    <input type="text" readonly value="<?= $kios;?>" name="kios" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" readonly value="<?= $harga;?>" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">KTP Penyewa</label>
                    <input type="text" readonly name="nik" value="<?= $nik;?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyewa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penyewa</label>
                    <input type="text" readonly name="penyewa" value="<?=     $nama_penyewa ;?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyewa">
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Awal Sewa</label>
                    <input type="date" readonly value="<?= $awal;?>" name="awal" class="form-control" id="exampleInputEmail1" placeholder="Awal Sewa">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Akhir Sewa</label>
                    <input type="date" readonly value="<?= $akhir;?>" name="akhir" class="form-control" id="exampleInputEmail1" placeholder="Akhir Sewa">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Usaha</label>
                    <textarea type="text" readonly name="usaha" class="form-control" id="exampleInputEmail1" placeholder="Jenis Usaha"><?=$usaha;?></textarea>
                  </div>
                  
                  <?php if(!empty($id_pembayaran)){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Bayar</label>
                    <br></br>
                    <img src="assets/bayar/<?=$bukti;?>" value="<?=$bukti;?>" name="bukti" class="img-fluid" width="200" height="200" id="exampleInputEmail1"></img>
                    <input type="hidden" value="<?=$bukti;?>" name="bukti_bayar" class="form-control" id="exampleInputEmail1" placeholder="Jenis Usaha">  
                    <input type="hidden" name="id_pembayaran" value="<?= $id_pembayaran;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Bayar</label>
                    <input type="date" readonly value="<?=$tgl_pembayaran;?>" name="tgl_bayar" class="form-control" id="exampleInputEmail1" placeholder="Jenis Usaha">
                  </div>
                  
                  
                  <?php } ?>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Bukti Bayar</label>
                    <input type="file" readonly name="file" class="form-control" id="exampleInputEmail1" placeholder="Jenis Usaha">
                  </div>

                  <input type="hidden" name="id_sewa" value="<?= $id_sewa;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  <input type="hidden" name="id_kios" value="<?= $id_kios;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  <input type="hidden" name="id_penyewa" value="<?= $id_penyewa;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
               
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <?php if(!empty($id_pembayaran)){?>
                  <a href="form_cetak.php?id=<?=$id_pembayaran;?>" class="btn btn-primary">cetak pembayaran</a>
                  <?php } ?>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
 <?php } ?>

<?php 

if(isset($_SESSION['eo'])){
$id_eo = $_SESSION['eo'];


$select = mysqli_query($conn, "SELECT * FROM sewa
                                INNER JOIN kios ON kios.id_kios=sewa.id_kios
                                INNER JOIN penyewa ON penyewa.id_penyewa=sewa.id_penyewa
                                WHERE id_sewa='$id_sewa'");

foreach($select as $sel){

    $kios = $sel['nama_kios'];
    $harga = $sel['harga_kios'];
    $nik = $sel['ktp_penyewa'];
    $awal = $sel['tgl_awal_sewa'];
    $akhir = $sel['tgl_akhir_sewa'];
    $usaha = $sel['jenis_usaha'];
    $nama_penyewa = $sel['nama_penyewa'];
}

$selectPembayaran = mysqli_query($conn, "SELECT * FROM pembayaran INNER JOIN sewa ON sewa.id_sewa=pembayaran.id_sewa WHERE sewa.id_sewa='$id_sewa'");

if(!empty($selectPembayaran)){
foreach($selectPembayaran as $sb){
    $id_pembayaran = $sb['id_pembayaran'];
    $tgl_pembayaran = $sb['tgl_pembayaran'];
    $bukti = $sb['bukti_pembayaran'];
    $status_bayar = $sb['status_bayar'];
}
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Pembayaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Input Pembayaran</li>
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
                <h3 class="card-title">Form Input Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/acc_sewa.php?id=<?= $id_pembayaran;?>" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kios</label>
                    <input type="text" readonly value="<?= $kios;?>" name="kios" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" readonly value="<?= $harga;?>" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Kode Kios">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">KTP Penyewa</label>
                    <input type="text" readonly name="nik" value="<?= $nik;?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyewa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penyewa</label>
                    <input type="text" readonly name="penyewa" value="<?=     $nama_penyewa;?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyewa">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Awal Sewa</label>
                    <input type="date" readonly value="<?= $awal;?>" name="awal" class="form-control" id="exampleInputEmail1" placeholder="Awal Sewa">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Akhir Sewa</label>
                    <input type="date" readonly value="<?= $akhir;?>" name="akhir" class="form-control" id="exampleInputEmail1" placeholder="Akhir Sewa">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Usaha</label>
                    <textarea type="text" readonly name="usaha" class="form-control" id="exampleInputEmail1" placeholder="Jenis Usaha"><?=$usaha;?></textarea>
                  </div>
                  
                  <?php if(!empty($id_pembayaran)){?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Bayar</label>
                    <br></br>
                    <img src="assets/bayar/<?=$bukti;?>" value="<?=$bukti;?>" name="bukti" class="img-fluid" width="200" height="200" id="exampleInputEmail1"></img>
                    <input type="hidden" value="<?=$bukti;?>" name="bukti_bayar" class="form-control" id="exampleInputEmail1" placeholder="Jenis Usaha">  
                    <input type="hidden" name="id_pembayaran" value="<?= $id_pembayaran;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Bayar</label>
                    <input type="date" readonly value="<?=$tgl_pembayaran;?>" name="tgl_bayar" class="form-control" id="exampleInputEmail1" placeholder="Jenis Usaha">
                  </div>
                  
                  
                  <?php } ?>

                  

                  <input type="hidden" name="id_sewa" value="<?= $id_sewa;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  <input type="hidden" name="id_kios" value="<?= $id_kios;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
                  <input type="hidden" name="id_penyewa" value="<?= $id_penyewa;?>" class="form-control" id="exampleInputEmail1" placeholder="Ukuran (m)">
               
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <?php if($status_bayar==1){?>
                  <button type="submit" class="btn btn-primary">ACC Sewa</button>
                  <a href="controller/batal_sewa.php?id=<?=$id_sewa;?>" class="btn btn-primary">Tolak Sewa</a>
                  <a href="form_cetak.php?id=<?=$id_pembayaran;?>" class="btn btn-primary">cetak pembayaran</a>
                  <?php } ?>
                  
                  <?php if($status_bayar==2){?>
                  <a href="form_cetak.php?id=<?=$id_pembayaran;?>" class="btn btn-primary">cetak pembayaran</a>
                  <?php } ?>

                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
 <?php } ?>

 

<?php 
include("footer.php");
?>
