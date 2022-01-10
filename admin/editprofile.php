
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hydromart | Edit Profile</title>

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
              <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
              <li class="breadcrumb-item active">Form Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                include('koneksi.php');
                $id = $_GET['id']; // mengambil id artikel yang diubah

                //menampilkan artikel berdasarkan id
                $datas = mysqli_query($koneksi, "SELECT * FROM profile WHERE id_profile = 'id'");
                $row = mysqli_fetch_assoc($datas);

                ?>
              <form method="post" role="form" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul_profile">
                      </div>
                    </div>
                    <!--Image Input -->
                    <div class="form-group">
		            <img src="../foto_profile/" width="100">
	                </div>
                    <div class="form-group">
		            <label>Gambar</label>
		            <input type="file" class="form-control" name="gambar" >
	                </div>
                    <!-- text input -->
                    <div class="form-group">
                    <div class="col-sm-12">
                    <label>Isi</label>
                    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
                     <tr>
                    <td><textarea name="isi" class="ckeditor" id="ckedtor">
                    </textarea>
            </td>
                    </tr>
                    <br>
                    <td><button class="btn btn-primary" name="submit" value="simpan">Update</button></td>
                    </br>                  
        </table>
    </form>
    <?php
if (isset($_POST['submit'])){

  $judul_profile = $_POST['judul_profile'];
  $isi = $_POST['isi'];
	$gambar = $_FILES['gambar']['name'];
	$lokasifoto = $_FILES['gambar']['tmp_name'];
	// jk foto dirubah
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../foto_profile/$namafoto");

		//query mengubah artikel
    mysqli_query($koneksi, "UPDATE profile SET judul_profile='$judul_profile', isi='$isi', gambar='$gambar'  WHERE id_profile ='$id'");
	}
	
	echo "<script>alert('Data Profile Telah di Ubah');</script>";
	echo "<script>location='profile.php';</script>";
}
?>

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
