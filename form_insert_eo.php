<?php 
include("header.php");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input EO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Input EO</li>
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
              <form method="post" action="controller/insert_eo.php">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                          </br>
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                        </div>
                      </div>

                      <div class="col-sm">
                        <label for="exampleInputEmail1">No HP</label>
                        <input type="number" name="hp" class="form-control" id="exampleInputEmail1" placeholder="No HP">
                        </br>
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pasw" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
