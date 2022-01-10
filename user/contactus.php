<?php

include 'koneksi.php';
include 'navbar.php';
?>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
 
    <!-- header-end -->
   
       <!-- breadcam_area_start -->
       <div class="breadcam_area bradcam_bg overlay2">
            <div class="bradcam_text">
                <h3>Contact</h3>
            </div>
        </div>
        <!-- breadcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">             
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Konsultasi Via Whatsapp?</h2>
                    </div>
                   
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="send.php" method="post" target="_blank">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name"   placeholder=" Nama Anda">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"  placeholder="Email Anda">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="pesan" id="pesan" type="text" cols="30" rows="9"  placeholder="Masukkan Pesan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="noWa" value="+6287785157089">
                            <div class="form-group mt-3">
                                <button type="submit" name="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>


                    <?php $ambil = $koneksi->query("SELECT * FROM contactus"); ?>
				            <?php while($percontact = $ambil->fetch_assoc()){ ?>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h4>PT. INDOWATER AIR MINUM</h4>
                                <b><h3><?php echo $percontact['alamat']; ?></h3></b>
                                
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $percontact['notelp']; ?>&text=Saya ingin tahu banyak tentang hydromart!"><?php echo $percontact['notelp']; ?></a>
                                <br>
                                <br>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $percontact['notelp_cadangan']; ?>&text=Saya ingin tahu banyak tentang hydromart!"><?php echo $percontact['notelp_cadangan']; ?></a></h3>
                            </br>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><?php echo $percontact['email']; ?></h3>
                                <br>
                                <h3><?php echo $percontact['email_cadangan']; ?></h3>
                            </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </section>
        <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=<?php echo $percontact['notelp']; ?>&text=Saya ingin tahu banyak tentang hydromart!' rel='nofollow noopener' target='_blank' title='Whatsapp' />
    <!-- ================ contact section end ================= -->
    <?php } ?>
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