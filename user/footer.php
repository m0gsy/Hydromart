<footer class="footer footer_bg">
    <div class="footer_top">
        <div class="container-fluid p-0" style="height:100px;">
            <div class="row no-gutters ">
                <div class="col-xl-3 col-12 col-md-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="index.php">
                                <img src="img/footer-logo.png" alt="">
                            </a>
                        </div>
                        <?php $ambil = $koneksi->query("SELECT * FROM sosmed"); ?>
                        <?php while ($persosmed = $ambil->fetch_assoc()) { ?>
                            <ul class="social_links">
                                <li>
                                    <a href="<?php echo $persosmed['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo $persosmed['instagram']; ?>"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo $persosmed['youtube']; ?>"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                    </div>
                </div>
            <?php } ?>
            <div class="col-xl-9 col-12 col-md-8">
                <div class="footer_header d-flex justify-content-between">
                    <div class="footer_header_left">
                        <h3>Punya Pertanyaan?</h3>
                        <p>Silahkan hubungi kontak kami</p>
                    </div>
                    <div class="footer_btn">
                        <a href="contactus.php" class="boxed-btn2">Contact Us</a>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>
    
    <div class="footer_copy_right">
        <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
                document.write(new Date().getFullYear());
            </script> All rights reserved | March 21, 2002</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
</footer>