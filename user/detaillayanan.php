<?php
include 'koneksi.php';
include 'navbar.php';
?>
<body>

     <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area bradcam_bg overlay2">
        <div class="bradcam_text">
            <h3>Layanan</h3>
        </div>
    </div>
     <!-- breadcam_area_end -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                <?php
                  $id_layanan = $_GET["id"];
                  $ambil = $koneksi->query("SELECT * FROM layanan WHERE id_layanan='$id_layanan'");
				$detail= $ambil->fetch_assoc();
                ?>
                     <img class="img-fluid" src="foto_layanan/<?php echo $detail['gambar']; ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $detail['judul_layanan']; ?>
                     </h2>
                     <p class="excert">
                     <?php echo $detail['isi'];?>
                     </p>
                    
                  </div>
               </div>
            </div>  
         </div>
      </div>
   </section>
   <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />
   <!--================ Blog Area end =================-->

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

</body>

</html>