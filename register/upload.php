<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>qtaaruf</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="taaruf online" />
		<meta name="keywords" content="taaruf online, qtaaruf, taaruf" />
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="../assets/css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="../assets/css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="../assets/css/magnific-popup.css">
		<!-- Theme style  -->
		<link rel="stylesheet" href="../assets/css/style.css">
		<!-- Modernizr JS -->
		<script src="../assets/js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="../assets/images/icon.png">
	</head>
	<body>
<?php
session_start();
if (empty($_SESSION['nama'])){
	header('location:index.html');
 }
 ?>
 
 <?php
//kode php ini kita gunakan untuk menampilkan pesan eror
if(!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<h3>File yang anda upload bukan format gambar</h3>';
    } else if ($_GET['error'] == 2) {
        echo '<h3>File anda sudah ada pada server kami</h3>';
    } else if ($_GET['error'] == 3) {
        echo '<h3>Ukuran file anda terlalu besar</h3>';
    } else if ($_GET['error'] == 4) {
        echo '<h3>Terjadi kesalahan saat upload, silahkan upload ulang</h3>';
    }
}
?>	
	
		<div class="fh5co-loader"></div>	
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo">
							<a href="../"><img src="../assets/images/logo.png"></a>
						</div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="../">Home</a></li>
							<li ><a href="../proses.html">Proses</a></li>
							<li><a href="../gallery.html">Gallery</a></li>
							<li class="active" ><a href="#">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(../assets/images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Register Ta'aruf</h1>
								<h2>Hi single muslim! untuk memulai ta`aruf silahkan lengkapi biodata dibawah ini, semoga qtaaruf menjadi bagian perjalananmu untuk menemukan separuh agamamu.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
			<div id="fh5co-portfolio">
				<div class="container">
					<div class="row">
						<div class="register-content container col-sm-8 col-sm-offset-2">
							<form method="POST" action="upload/input.php" class="form-horizontal" enctype="multipart/form-data">
								<div class="step">
									<h3 class="step-head text-center">Upload</h3>
									<div class="progress">
										<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="col-sm-9 col-sm-offset-1">
										<div class="col-sm-offset-1">
											<label >Upload scan / foto ktp</label>
											<input name="ktp" id="ktp" type="file" placeholder="" class="form-control">
											<span class="file_error"></span>
											<small class="pull-right"> Ukuran gambar max. 2 Mb</small>
										</div>
									</div>
								</div>
								<div class="step">
									<h3 class="step-head text-center">Upload</h3>
									<div class="progress">
										<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="col-sm-9 col-sm-offset-1">
										<div class="col-sm-offset-1">
											<label >Upload fotomu</label>
											<input name="foto" id="foto" type="file" placeholder="" class="form-control">
											<span class="file_error"></span>
											<small class="pull-right"> Ukuran gambar max. 2 Mb</small>
										</div>
									</div>
								</div>
								<div class="step">
									<div class="col-sm-9 col-sm-offset-1">
										<div class="col-sm-offset-1">
											<label >Apakah fotomu sudah sesuai dengan asli?</label>
										</div>
									</div>
								</div>
								<div class="row">
								  <div class="col-sm-9 col-sm-offset-1">
									  <div class="pull-right">
										<button type="button" class="action btn-sky text-capitalize back btn">Back</button>
										<button type="button" class="action btn-sky text-capitalize next btn">Next</button>
										<button type="submit" class="action btn-hot text-capitalize submit btn" value="submit">Submit</button>
									  </div>
								  </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<div id="fh5co-started">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading-subscribe">
							<h2>Subscribe</h2>
							<h3>Dapatkan Ebook dan tips-tips menarik tentang membangun keluarga sakinah.</h3>
							
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2">
							<form method="POST" action="/" class="form-inline">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
									
										<label for="email" class="sr-only">Email</label>
										<input type="email" class="form-control" placeholder="Email" id="email" name="email" >
									</div> 
								</div>
								<div class="col-md-6 col-sm-6">
									<button type="submit" class="btn btn-default btn-block">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 col-sm-4 fh5co-widget text-left">
						<h3>Hubungi Kami</h3>
						<p>Spazio Forward Factory Lt. 7<br>Jl. Mayjen Yonosuwoyo Kav.3, Surabaya<br>qtaaruf.indonesia@gmail.com<br>+62857 2977 2893</p>
						<!-- <h3>Hubungi Kami</h3>
						<p>qtaaruf<br>Gedung Spazio Forward Factory	Lt. 7<br>Jl. Mayjen Yonosuwoyo Kav.3, Surabaya<br>qtaaruf.indonesia@gmail.com<br>+62857 2977 2893</p> -->
					</div>
					<div class="col-md-4 col-sm-4 fh5co-widget text-center">
						<h3>Supported by</h3>
						<img src="../assets/images/1000sd.jpg" style="width: 15%; height: 15%">
						<!-- <h3>Hubungi Kami</h3>
						<p>qtaaruf<br>Gedung Spazio Forward Factory	Lt. 7<br>Jl. Mayjen Yonosuwoyo Kav.3, Surabaya<br>qtaaruf.indonesia@gmail.com<br>+62857 2977 2893</p> -->
					</div>
					<!-- <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="fh5co-footer-links">
							<li><a href="#">About</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Meetups</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="fh5co-footer-links">
							<li><a href="#">Shop</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Handbook</a></li>
							<li><a href="#">Held Desk</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="fh5co-footer-links">
							<li><a href="#">Find Designers</a></li>
							<li><a href="#">Find Developers</a></li>
							<li><a href="#">Teams</a></li>
							<li><a href="#">Advertise</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</div> -->
					<div class="col-md-4 col-sm-4 text-center">
						<p>
							<small class="block">&copy; 2017 qtaaruf</small> 
							
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<!-- <li><a href="#"><i class="icon-mail"></i></a></li> -->
								<li><a href="https://www.facebook.com/Qtaaruf/"><i class="icon-facebook"></i></a></li>
								<li><a href="http://instagram.com/_u/qtaaruf"><i class="icon-instagram"></i></a></li>
								<li><a href="https://www.twitter.com/qtaaruf"><i class="icon-twitter"></i></a></li>
								<!-- <li><a href="#"><i class="icon-dribbble"></i></a></li> -->
							</ul>
						</p>
					</div>
				</div>

				<!-- <div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2017 qtaaruf</small> 
							<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a></small>
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<!-- <li><a href="#"><i class="icon-mail"></i></a></li>
								<li><a href="https://www.facebook.com/Qtaaruf/"><i class="icon-facebook"></i></a></li>
								<li><a href="http://instagram.com/_u/qtaaruf"><i class="icon-instagram"></i></a></li>
								<li><a href="https://www.twitter.com/qtaaruf"><i class="icon-twitter"></i></a></li>
								<!-- <li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div> -->
			</div>
		</footer>
		
		<!-- jQuery -->
		<script src="../assets/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="../assets/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="../assets/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="../assets/js/jquery.waypoints.min.js"></script>
		<!-- countTo -->
		<script src="../assets/js/jquery.countTo.js"></script>
		<!-- Magnific Popup -->
		<script src="../assets/js/jquery.magnific-popup.min.js"></script>
		<script src="../assets/js/magnific-popup-options.js"></script>
		<!-- Main -->
		<script src="../assets/js/main.js"></script>
		<!-- <script src="{{ url('js/gallery.js') }}"></script> -->

	</body>
	<script>
	$(document).ready(function(){
			
		var current = 1;
		
		widget      = $(".step");
		btnnext     = $(".next");
		btnback     = $(".back"); 
		btnsubmit   = $(".submit");

		// Init buttons and UI
		widget.not(':eq(0)').hide();
		hideButtons(current);
		setProgress(current);

		// Next button click action
		btnnext.click(function(){
			if(current < widget.length){
				// Check validation
				if (validate(current)){
					widget.show();
					widget.not(':eq('+(current++)+')').hide();
					setProgress(current);
				}
			}
			hideButtons(current);
		})

		// Back button click action
		btnback.click(function(){
			if(current > 1){
				current = current - 2;
				if(current < widget.length){
					widget.show();
					widget.not(':eq('+(current++)+')').hide();
					setProgress(current);
				}
			}
			hideButtons(current);
		})
	});
	function validate(current) {
		var limit = parseInt(widget.length);
		if(current < limit){
			var file_size	= $('#ktp')[0].files[0].size;
		}
		if(current > 1){
			var file_size	= $('#foto')[0].files[0].size;
		}
		if(file_size>2097152){
			$(".file_error").html("Ukuran gambar lebih besar dari 2MB");
			return false;
		}
		$(".file_error").html("");
		return true;
	}
		// Change progress bar action
	setProgress = function(currstep){
		var percent = parseFloat(100 / widget.length) * currstep;
		percent = percent.toFixed();
		$(".progress-bar").css("width",percent+"%").html(percent+"%");		
	}

	// Hide buttons according to the current step
	hideButtons = function(current){
		var limit = parseInt(widget.length); 

		$(".action").hide();

		if(current < limit) btnnext.show();
		if(current > 1) btnback.show();
		if (current == limit) { 
			// Show entered values
			$(".display label:not(.control-label)").each(function(){
				console.log($(this).find("label:not(.control-label)").html($("#"+$(this).data("id")).val()));	
			});
			btnnext.hide(); 
			btnsubmit.show();
		}
	}
	
	
</script>
</html>