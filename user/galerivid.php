<?php

include 'koneksi.php';
include 'navbar.php';
?>

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-column-gap: 20px;
  grid-row-gap: 20px;
  background-color:white;
  padding: 10px;

}

.grid-container > div {
  background-color:white;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

</style>
<!-- breadcam_area_start -->
<div class="breadcam_area bradcam_bg overlay2">
		<div class="bradcam_text">
			<h3>Galeri Video</h3>
			<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
		</div>
	</div>
<br>
<div class="grid-container">

        <?php
    
        // Create a query
        $query = 'SELECT id,name,youtubeid
            FROM galerivideo
            ORDER BY name';

        // Execute the query
        $result = mysqli_query($koneksi, $query);


        // Display the number of recirds found
        

        // Loop through the records found
        while ($record = mysqli_fetch_assoc($result))
        {

            // Output the record using if statements and echo
           


           
            $url = 'https://www.youtube.com/watch?v='.$record['youtubeid'];

            

          
            echo '<iframe width="100%" height="280" src="https://www.youtube.com/embed/'.$record['youtubeid'].'?modestbranding=1" 
                rameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>';
            
        }

        ?>        
		</div>
       
        
            <br>
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

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>\
</body>