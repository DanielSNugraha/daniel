<?php 
include("header.php");
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
              <form method="post" action="controller/insert_mall.php" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mall</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" style="width:300px" placeholder="Nama Mall">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Mall</label>
                    <textarea type="text" name="alamat" class="form-control" id="exampleInputEmail1" style="width:300px" placeholder="Alamar Lengkap"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Peta Kios</label>
                    <input type="file" style="width:300px" name="map" class="form-control" id="exampleInputEmail1" placeholder="Peta Kios">
                  </div>
                  
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
