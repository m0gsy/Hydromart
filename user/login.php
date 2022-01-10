<?php
session_start();
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
                        <h3 class="card-title text-center mb-5 fw-light fs-5">Form Login Investor</h3>
                        <form method="post">
                            <hr class="my-4">
                            <div class="form-floating mb-3">
                                <label for="floatingInputEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="floatingInputEmail" placeholder="name@example.com" required="">
                            </div>

                            <label for="floatingInputEmail">No. Telepon</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>

                                <input type="+62" class="form-control" name="telepon_pelanggan" id="floatingInputEmail" type="text" cols="30" rows="9" value="+62" required="">
                            </div>


                            <div class="d-grid mb-2" style="padding-top:10px">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="login">Login</button>
                            </div>


                            <p class="loginhere">
                Belum Punya Akun? <a href="register.php" class="loginhere-link">Daftar Disini!</a>
              </p>
                            <hr class="my-4">




                        </form>
                        <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />

                        <?php
                        // jk ada tombol login(tombol simpan ditekan)
                        if (isset($_POST["login"])) {

                            $email = $_POST["email"];
                            $telepon_pelanggan = $_POST["telepon_pelanggan"];
                            // lakukan query ngecek akun di tabel pelanggan di db
                            $ambil = $koneksi->query("SELECT * FROM pelanggan
		                    WHERE email_pelanggan='$email' AND telepon_pelanggan='$telepon_pelanggan'");

                            //ngitung akun yg terambil
                            $akunyangcocok = $ambil->num_rows;

                            //jika 1 akun yang cocok, maka diloginkan
                            if ($akunyangcocok == 1) {
                                //anda sukses login
                                //mendapatkan akun dlm bentuk array
                                $akun = $ambil->fetch_assoc();
                                // simpan di session pelanggan
                                $_SESSION["pelanggan"] = $akun;
                                echo "<script>alert('Anda suskes login');</script>";
                                echo "<script>location='pesanan.php';</script>";

                            
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