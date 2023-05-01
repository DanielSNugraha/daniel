<?php 
include("header.php");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Penyewa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Input Penyewa</li>
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
     <form action="controller/insert_penyewa.php" method="post">
        <div class="card-body">
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label for="exampleInputNIK">NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="NIK" id="exampleInputNIK">
                </br>
                <label for="exampleInputNama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" id="exampleInputNama">
                </br>
                <label for="exampleInputAlamat">Alamat</label>
                <textarea type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" id="exampleInputAlamat"></textarea>
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" id="exampleInputEmail">
                </br>
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="pasw" class="form-control" placeholder="Password" id="exampleInputPassword">
                </br>
                <label for="exampleInputNoHP">No HP</label>
                <input type="number" name="hp" class="form-control" placeholder="No HP" id="exampleInputNoHP">
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
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
