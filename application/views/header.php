<!DOCTYPE html>
<html>
<head>
<title>Yayasan Indonesia Sehat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Yayasan Indonesia Sehat" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url() ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<!-- <script language="javascript" type="text/javascript" src="<?php echo base_url() ?>assets/js/elsyifa.js"></script> -->
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
	<!--head-->
	<div class="head" id="home">
		<div class="container">
			<div class="head-top">
				<div class="col-md-6 h-left">
					<p>Alamat Email : yayasanindonesiasehat@gmail.com </p>
				</div>
				<div class="col-md-6 h-right">
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
						<li><a href="#"><span class="rss"> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--head-->
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="logo">
					<a href="<?php echo base_url() ?>index.php"><h1>Yayasan Indonesia Sehat</h1></a>
				</div>
				<div class="head-right">
					<div class="top-nav">
						<span class="menu"><img src="<?php echo base_url() ?>assets/images/nav-icon.png" alt=""> </span>
						<ul>
							<li><a href="<?php echo base_url() ?>index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
							<li><a href="<?php echo base_url() ?>index.php/welcome/tentang"><span class="glyphicon glyphicon-info-sign"></span>Tentang Kami</a></li>
							<li><a href="<?php echo base_url() ?>index.php/welcome/artikel"  <?php if($this->uri->segment(1)=="profile"){echo 'class="active"';}?>><span class="glyphicon glyphicon-picture"></span>Artikel</a></li>
							<li><a href="<?php echo base_url() ?>index.php/welcome/kontak"><span class="glyphicon glyphicon-envelope"></span>Kontak Kami</a></li>
							<div class="clearfix"> </div>
						</ul>
						<!--script-->
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
