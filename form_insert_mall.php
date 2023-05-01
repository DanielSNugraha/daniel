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
              <!-- <div class="card-header">
                <h3 class="card-title"></h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="controller/insert_mall.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Mall</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Mall">
                        </br>
                        <label for="exampleInputEmail1">Peta Kios</label>
                        <input type="file" name="map" class="form-control" id="exampleInputEmail1" placeholder="Peta Kios">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Mall</label>
                        <textarea rows="5" type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Alamar Lengkap"></textarea>
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
