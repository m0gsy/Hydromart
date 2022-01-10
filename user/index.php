<?php

include 'koneksi.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hydromart | Depo Air Minum Berkualitas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
<?php

include 'navbar.php';
?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/banner/1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner/hydromart2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner/hydromart3.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                    <?php $ambil = $koneksi->query("SELECT * FROM profile"); ?>
				            <?php while($perprofile = $ambil->fetch_assoc()){ ?>
                        <img src="foto_profile/<?php echo $perprofile['gambar']; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title">
                     
                            <span class="sub_heading">About Us</span>
                            <h3><?php echo $perprofile['judul_profile']; ?></h3>
                            
                        </div>
                        <p><?php echo substr($perprofile['isi'],0, 1000);?></p>
                        
                        <a href="about.php" class="boxed-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- about_area_end -->
<br>
    <!--< dream_service_start -->
    <div style="background: #f0f0f0;" class="dream_service">
        <div class="container">
            <div style="padding-bottom: 10px;" class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-95">
                        <span class="sub_heading">VISI & MISI</span>
                        <h3>Visi & Misi Hydromart</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_dream text-center">
                        <div class="thumb"> 
                        </div>
                        <h3>Visi</h3>
                        <p>Mendirikan 1000 Cabang Hydromat di Seluruh Indonesia & Luar Negeri</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_dream text-center">
                        <div class="thumb">
                            
                        </div>
                        <h3>&</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_dream text-center">
                        <div class="thumb"> 
                        </div>
                        <h3>Misi</h3>
                        <ul class="about_list">
                            <li>•Memberikan peluang usaha yang mudah di jalankan dan dapat bertahan lama kepada setiap orang atau badan usaha.</li>
                            <li>•Memberikan alternatif air bersih layak minum yang lebih murah dan terjangkau di Seluruh Indonesia & Luar Negeri</li>
                            <li>•Membuka lapangan pekerjaan yang luas dan kerjasama usaha.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dream_service_end -->

    <!-- lastest_project_strat -->
    <div class="lastest_project" style="padding-bottom:5px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <span class="sub_heading">Layanan</span>
                        <h3>Layanan Hydromart</h3>
                        <div class="seperator"></div>
                    </div>
                </div>
            </div>
            <?php $ambil = $koneksi->query("SELECT * FROM layanan"); ?>
				            <?php while($perlayanan = $ambil->fetch_assoc()){ ?>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="single_project_thumb">
                        <img src="foto_layanan/<?php echo $perlayanan['gambar']; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title">
                        <h4><?php echo $perlayanan['judul_layanan']; ?></h4>
                       
                        <a href="detaillayanan.php?id=<?php echo $perlayanan["id_layanan"]; ?>" class="boxed-btn">View More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            
                </div>
            </div>
        </div>
    </div>
    
    <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />

 <?php
 include 'footer.php';
 ?>


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>