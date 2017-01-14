<!-- slider.php -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-text">
								<h3>Selamat Datang</h3>
							  <p>Di Yayasan Indonesia Sehat</p>
							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3>Sedikit Bantuan Dari Anda</h3>
								<p>Sangat Berharga Untuk Kami</p>
							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3>Bersama Kami</h3>
								<p>Indonesia Sehat Dan Lebih Baik</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--FlexSlider-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flexslider.css" type="text/css" media="screen" />
	<script defer src="<?php echo base_url() ?>assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
	<!--End-slider-script-->
