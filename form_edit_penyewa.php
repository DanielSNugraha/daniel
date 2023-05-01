<?php
include("header.php");
include("controller/koneksi.php");

$id = $_GET['id'];
$select = mysqli_query($conn, "SELECT * FROM penyewa WHERE id_penyewa='$id'");
$select2 = mysqli_query($conn, "SELECT * FROM sewa 
                                INNER JOIN kios ON kios.id_kios=sewa.id_kios
                                INNER JOIN penyewa ON penyewa.id_penyewa= sewa.id_penyewa
                                INNER JOIN status ON status.id_status=kios.id_status
                                WHERE penyewa.id_penyewa='$id'");

foreach ($select as $sel) {
  $nik = $sel['ktp_penyewa'];
  $nama = $sel['nama_penyewa'];
  $alamat = $sel['alamat_penyewa'];
  $email = $sel['email_penyewa'];
  $hp = $sel['no_hp_penyewa'];
}
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil</h1><br></br>

          <?php if (isset($_GET['pesan']) && $_GET['pesan'] == "true") { ?>
            <span class="alert alert-success">Data Berhasil Diubah</span>
          <?php } ?>
        </div>


        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profil</li>
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
            <form action="controller/update_penyewa.php" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm">

                  </div>
                  <div class="col-sm">

                  </div>
              </div>
              <div class="card-footer">

              </div>
              <div class="form-group">
                <input type="text" value="<?= $nik; ?> " style="width: 300px;" name="nik" class="form-control" placeholder="NIK">

              </div>
              <div class="form-group">
                <input type="text" value="<?= $nama; ?>" style="width: 300px;" name="nama" class="form-control" placeholder="Nama Lengkap">
                <div class="input-group-append">

                </div>
              </div>

              <div class="form-group">
                <textarea type="text" value="<?= $alamat; ?>" style="width: 300px;" name="alamat" class="form-control" placeholder="Alamat Lengkap"><?= $alamat; ?></textarea>

              </div>

              <div class="form-group">
                <input type="email" value="<?= $email; ?>" style="width: 300px;" name="email" class="form-control" placeholder="Email">

              </div>

              <div class="form-group">
                <input type="number" value="<?= $hp; ?>" style="width: 300px;" name="hp" class="form-control" placeholder="No HP">

              </div>
              <div class="row">


                <input type="hidden" value="<?= $id; ?>" name="id" class="form-control" placeholder="No HP">


                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Edit</button>

                </div>
                <div class="col-4">
                  <?php if (isset($_SESSION['penyewa'])) { ?>
                    <a href="form_ubah_password.php?id=<?= $id; ?>&&r=3" class="btn btn-primary btn-block">Ubah Password</a>
                  <?php } ?>

                  <?php if (isset($_SESSION['admin'])) { ?>
                    <a href="form_ubah_password.php?id=<?= $id; ?>&&r=1" class="btn btn-primary btn-block">Ubah Password</a>
                  <?php } ?>

                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.row -->

        <br></br>

        <?php if (isset($_SESSION['penyewa'])) { ?>


          <!-- left column -->
          <div class="col-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kiosku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Ukuran</th>
                      <th>Harga</th>
                      <th>Status</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                      foreach ($select2 as $sel2) {
                        $id2 = $sel2['id_kios'];
                        $idst2 = $sel2['id_status'];
                      ?>
                        <td><?= $sel2['nama_kios']; ?></td>
                        <td><?= $sel2['ukuran_kios']; ?></td>
                        <td><?= $sel2['harga_kios']; ?></td>
                        <td><?= $sel2['nama_status']; ?></td>
                        <td>
                          <?php if ($idst2 == '1') { ?>
                            <a href="form_insert_sewa.php?id=<?= $id2; ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                          <?php } ?>
                          <?php if ($idst2 <> '1' && $idst2 <> '2') { ?>
                            <a onclick="return confirm('Apakah anda yakin hapus data?')" href="controller/batal_sewa.php?id=<?= $id2; ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
                          <?php } ?>

                          <?php if ($idst2 == '2') { ?>
                            Telah di ACC
                          <?php } ?>
                        </td>

                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
            <!-- /.card -->

          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
<?php } ?>

</div>


<?php
include("footer.php");
?>