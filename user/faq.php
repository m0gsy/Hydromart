<?php
include 'koneksi.php';
include 'navbar.php';
?>

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

<div class="breadcam_area bradcam_bg overlay2">
  <div class="bradcam_text">
    <h3>FAQ</h3>
  </div>
</div>
<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
  <div class="container">
    <h2>Frequently Asked Questions </h2>
    <div class="panel-group" id="wrapper" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
          <h3 class="panel-title">

          
            <?php $ambil = $koneksi->query("SELECT * FROM faq"); ?>
            <?php if(mysqli_num_rows($ambil) > 0) { ?>
              
            <?php while ($perfaq = mysqli_fetch_assoc($ambil)) { ?>
              <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                  
                  <h3 class="panel-title">
                    
                    <a class="question" type="button" data-toggle="collapse" data-target="#jawaban" aria-expanded="false" aria-controls="collapse1">
                    <?php echo $perfaq['pertanyaan']; ?></a>
                    <b>
                    <div id="jawaban" class="answer">
                      <?php echo $perfaq['jawaban']; ?>
                    </div>
                    </b>
                  </h3>
                </div>
              </div>
        </div>
        <?php } ?>
    <?php } ?>
      </div>
   
    </div>

  </div>
</section>
<a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />
<?php
include 'footer.php';
?>

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
<script>
$(document).ready(function(){
    $(".answer1").hide();
    $(".answer2").hide();
    $(".question1").click(function(){
        $(".answer1").slideToggle();
    });
    $(".question2").click(function(){
        $(".answer2").slideToggle();
    });
    
});
</script>