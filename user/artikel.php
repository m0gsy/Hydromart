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
            <h3>Artikel</h3>
        </div>
    </div>
    <!-- breadcam_area_end -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                            <?php $ambil = $koneksi->query("SELECT * FROM artikel"); ?>
				<?php while($perartikel = $ambil->fetch_assoc()){ ?>
                                <img class="card-img rounded-0" src="foto_artikel/<?php echo $perartikel['gambar']; ?>" alt="">
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block">
                                    <h2><?php echo $perartikel['judul_artikel']; ?></h2>
                                </a>
                                <p><?php echo substr($perartikel['isi'],0, 190);?></p>
                                <a href="detailartikel.php?id=<?php echo $perartikel["id_artikel"]; ?>" class="boxed-btn">Read More</a>
                            </div>
                        </article>
                        <?php } ?>
                            </form>
                        </aside>

                        
                    </div>
                </div>
            </div>
        </div>

    </section>
    <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />
    <!--================Blog Area =================-->

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