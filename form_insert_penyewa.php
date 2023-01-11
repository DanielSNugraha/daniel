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
              <div class="card-header">
                <h3 class="card-title">Form Input Penyewa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
     <form action="controller/insert_penyewa.php" method="post">
        <div class="form-group">
          <input type="text" style="width: 300px;" name="nik" class="form-control" placeholder="NIK">
          
        </div>
        <div class="form-group">
          <input type="text" style="width: 300px;" name="nama" class="form-control" placeholder="Nama Lengkap">
          <div class="input-group-append">
           
          </div>
        </div>

        <div class="form-group">
          <textarea type="text" style="width: 300px;" name="alamat" class="form-control" placeholder="Alamat Lengkap"></textarea>
          
        </div>

        <div class="form-group">
          <input type="email" style="width: 300px;" name="email" class="form-control" placeholder="Email">
          
        </div>
        <div class="form-group">
          <input type="password" style="width: 300px;" name="pasw" class="form-control" placeholder="Password">
         
        </div>
        <div class="form-group">
          <input type="number" style="width: 300px;" name="hp" class="form-control" placeholder="No HP">
         
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
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
