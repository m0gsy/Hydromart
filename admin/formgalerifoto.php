<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hydromart | Tambah Galeri Foto</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <?php
  include "menu.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="galerifoto.php">Galeri</a></li>
              <li class="breadcrumb-item active">Form Galeri Foto</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Tambah Galeri Foto</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul_galeri" placeholder="Silahkan Isi Judul">
                      </div>
                    </div>
                  </div>
                    <!--Image Input -->
                    <div class="form-group">
		            <label>Gambar</label>
		            <input type="file" class="form-control" name="gambar">
	                </div>
                    <br>
                    <td><button class="btn btn-primary" name="save">Simpan</button></td>
                    </br>
                   
                   <?php
            if (isset($_POST['save'])) 
            {
	        $nama=$_FILES['gambar']['name'];
	        $lokasi=$_FILES['gambar']['tmp_name'];
	        move_uploaded_file($lokasi,"../foto_galeri/".$nama);
	         $koneksi->query("INSERT INTO galerifoto(judul_galeri, gambar) 
		    VALUES('$_POST[judul_galeri]', '$nama')");

	    echo "<div class='alert alert-info'>Data Tersimpan</div>";
	    echo "<meta http-equiv='refresh' content='1;url=galerifoto.php'>";
}
?>
        </table>
    </form>
    

                    </div>
            </div>
            
            <!-- /.card -->
            <!-- general form elements disabled -->

            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 Laksamana Bimo Wahyualdi.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
