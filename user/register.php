<?php
include 'koneksi.php';
include 'navbar.php';
?>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<style>
  body {
    background: #fdfeff;
    background: linear-gradient(to right, #0062E6, #33AEFF);
  }



  .btn-login {
    font-size: 0.8rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
  }
</style>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h3 class="card-title text-center mb-5 fw-light fs-5">Form Registrasi Investor</h3>
            <form method="post">
              <hr class="my-4">
              <div class="form-floating mb-3">
                <label for="floatingInputEmail">Email</label>
                <input type="email" class="form-control" name="email" id="floatingInputEmail" placeholder="name@example.com" required="">
              </div>
              <div class="form-floating mb-3">
                <label for="floatingInputEmail">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="John Doe" required="">
              </div>

              <label for="floatingInputEmail">No. Telepon</label>
              <div class="input-group mb-3">
                <input type="+62" class="form-control" name="telepon" id="floatingInputEmail" type="text" cols="30" rows="9" value="+62" required="">
              </div>
              <p class="text-danger">No. Telepon Wajib +62</p>

              <div class="form-floating mb-3">
                <label for="floatingInputEmail">Alamat</label>
                <textarea type="text" class="form-control" name="alamat" id="floatingInputEmail" cols="10" rows="5" placeholder="jln. cemara.." required=""></textarea>
              </div>

              <label for="paket">Pilih Paket:</label>

              <select id="paket" name="paket" required>
                <?php
                $ambil = $koneksi->query("SELECT * FROM paket");
                while ($paket = $ambil->fetch_assoc()) {
                ?>
                  <option value="<?php echo $paket['nama_paket']; ?>">
                    <?php echo $paket['nama_paket']; ?>
                  </option>


                <?php } ?>
              </select>



              <div class="d-grid mb-2" style="padding-top:10px">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="daftar">Register</button>
              </div>
              <p class="loginhere">
                Sudah Punya Akun? <a href="login.php" class="loginhere-link">Login Disini!</a>
              </p>


              <hr class="my-4">
             

              <div class="alert alert-info">
                <strong><a href="cara.php">Cara Menjadi Mitra Hydromart.</a></strong>

              </div>
             

            </form>
            <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />

            <?php
            //jk ada tombol daftar(ditekan tombol daftar)
            if (isset($_POST["daftar"])) {
              //mengambil isian nama,email,password,alamat,telepon
              $email = $_POST["email"];
              $nama = $_POST["nama"];
              $telepon = $_POST["telepon"];
              $alamat = $_POST["alamat"];
              $paket = $_POST["paket"];


              //cek apakah email sudah di gunakan
              $ambil = $koneksi->query("SELECT*FROM pelanggan WHERE email_pelanggan='$email'");
              $yangcocok = $ambil->num_rows;
              if ($yangcocok == 1) {

                echo "<script>alert('pendaftaran gagal, email sudah digunakan');</script>";
                echo "<script>location='register.php';</script>";
              } else {
                //query insert tabel ke pelanggan
                $koneksi->query("INSERT INTO pelanggan(email_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan, paket)
									VALUES('$email','$nama','$telepon','$alamat','$paket')");

                echo "<script>alert('Pendaftaran Sukses, Harap Login Terlebih Dahulu');</script>";
                echo "<script>location='login.php';</script>";
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php
include 'footer.php';
?>