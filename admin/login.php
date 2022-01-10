
<?php
session_start();
include ("koneksi.php");
if (!empty($_SESSION['username']) && !empty($_SESSION['password'])){
	echo "<script type=text/javascript>  
alert('Anda Sudah Login :) , Silahkan Logout terlebih dahulu');  
window.location = 'index.php';  
</script>";
	//header('Location:index.php');
}

if(isset($_POST['login'])){

$perintah_query=mysqli_query($koneksi, "SELECT * FROM admin WHERE username= '$_POST[username]' AND password= ('$_POST[password]')");
	if ($hasil_cek=mysqli_num_rows($perintah_query))
	{
	//SUKSESS
	$datauser=mysqli_fetch_array($perintah_query);
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];

	$_SESSION['id_admin']=$datauser['id_admin'];
//	echo $_SESSION[level];
	
	header("Location: index.php"); 
	}	else
	{
	//GAGAL LOGIN
	header("Location: login.php?err=yes");
	}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Hydro</b>mart</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign In To Start Your Session</p>
      <?php if(!empty($_GET['err'])){ ?>		
			<div class="alert alert-danger" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  <span class="sr-only">Error:</span>
			  Username / Password anda salah!
			</div>
			<?php } ?>
      <form  method="post">
        <div class="input-group mb-3">
          <input type="username" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    
      <!-- /.social-auth-links -->

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
