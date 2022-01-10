<?php

include 'koneksi.php';
include 'navbar.php';
?>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

  
   
       <!-- breadcam_area_start -->
       <div class="breadcam_area bradcam_bg overlay2">
            <div class="bradcam_text">
                <h3>Cabang Hydromart</h3>
                <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
            </div>
        </div>
        <!-- breadcam_area_end -->

    <!-- ================ contact section start ================= -->
  <br>
    <section class="konten">
		<div class="container">
			<div class="row">
				<?php $ambil = $koneksi->query("SELECT * FROM cabang"); ?>
				<?php while($percabang = $ambil->fetch_assoc()){ ?>
					<div class="col-md-4">
						<div class="thumbnail" width=>
							<div class="caption">
								<h3><?php echo $percabang['nama_cabang']; ?></h3>
								<h3><?php echo $percabang['alamat']; ?></h3>
								
							</div>
						</div>
					</div>
				<?php } ?>
			</section>
            <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />
    <!-- ================ contact section end ================= -->
    
    <!-- footer_start -->
    <?php
    include 'footer.php';
    ?>
        <!-- footer_end -->
        
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
        </script>
    </body>
    </html>