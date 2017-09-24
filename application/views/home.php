<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Expand - IT Solution</title>

	<!-- stylesheet css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>tambah/css/tipe.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tambah2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tambah2/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tambah2/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tambah2/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tambah2/css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tambah2/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tambah2/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>tambah2/css/style3.css">
	<link rel="stylesheet" type="<?php echo base_url();?>tambah2/text/css" href="css/fonts-googleapis.css">
	<!-- google web font css -->


</head>
<body data-spy="scroll" data-target=".navbar-collapse">
	
<!-- navigation -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#home" class="navbar-brand smoothScroll">Expand - IT Solution</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll"><font face="arial">Home</font></a></li>
				<li><a href="#profil" class="smoothScroll"><font face="arial">Profil</font></a></li>
				<li><a href="#tokonline" class="smoothScroll"><font face="arial">Toko Online</font></a></li>
				<li><a href="#tokonline" class="smoothScroll"><font face="arial">Cek/Komplain Servis</font></a></li>
				<li><a href="#lokasi" class="smoothScroll"><font face="arial">Lokasi</font></a></li>
				<li><a href="<?php echo base_url();?>index.php/C_Main"><font face="arial">Login</font></a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- home section -->
<div id="home">
	<div class="">
		<header  class="transparant">
		<div class="row">
			<img src="<?php echo base_url();?>tambah/img/at.jpg" class="img-circle gambar">
		</div>


		<div class="row ">
			<div class="container">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<span style="color:#fff;"><h3><i>Your partner today and future</i></h3></span><br>
				
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					
			</div>
		</div>
	</div>
	</header><!-- /header -->
	</div>
</div>

<!-- service section -->
<div id="profil">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
			<div class="tulisan">
			<span style="color:#1c66fc;"><h3>Expand – IT Solution</h3></span>

				<p>
 				Expand – IT Solution  merupakan  tempat  konsultasi  dan  servis  hardware 
				dan Software yang berkembang di daerah baurno bojonegoro yang meliputi pelayanan servis Laptop, PC, handphone, printer, cetak foto dan desain banner serta menyediakan assesoris hp juga sparepart laptop, PC, printer dan juga instalasi jaringan yang terbukti banyak balaidesa, sekolahan serta rumah individu meminta bantuan Team Expand untuk pemasangan juga setting jaringan. Dan juga melayani jual beli Hp bekas maupun laptop atau PC. System pelayanan yang ramah dan tepat waktu dalam melaksanakan tugas membuat Expand – IT Solution tak pernah sepi pengunjung.
 				<br>Di website ini akan melayani segala komplain dan memberikan solusi bagi customer
 				yang menggunakan jasa kami, dari yang ingin membeli assesoris maupun sparepart bisa langsung berkunjung ke toko online kami dan bagi yang ingin mengecek barang yang di servis atau ingin kompalain bisa mengakses beberapa link di bawah ini.
 				<br>								 
			<div class="clear"></div> 
		</div>
	</div>

		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			<br><br><center><img src="<?php echo base_url();?>tambah/img/ex.jpg" alt="" class="img-responsive"></center>
		</div>
								
	</div>
</div>

<!-- spasi section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- about section -->
<div id="tokonline">
	<div class="container">
		<div class="row isi">
			
				<div class="row linktengah">
					<div class="container">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<center><a href="http://www.expand.co.id/"><span style="color:#1c66fc;"><h3>Toko Online</h3></span></a></center><br>
							<center><a href="http://www.expand.co.id/" target="blank"><img src="<?php echo base_url();?>tambah/img/g1.jpg" alt="" class="img-responsive"></a></center>
							<br><center>Toko Online Expand - IT Solution<br>
							<font face="Cambria">Menyediakan banyak barang aksesoris dan sperpat komputer yang sangat berkualitas dan terjangkau harganya</font></center><br><br>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<center><a href="<?php echo base_url();?>index.php/C_Main"><span style="color:#1c66fc;"><h3>Barang Servis</h3></span></a></center><br>
							<center><a href="<?php echo base_url();?>index.php/C_Main"><img src="<?php echo base_url();?>tambah/img/g2.jpg" alt="" class="img-responsive"></a></center>
							<br><center>Cek barang servis<br>
							<font face="Cambria">Bagi customer servis yang ingin mengetahui kondisi barang anda silahkan cek sesuai nota dan nama</font></center><br><br>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<center><a href="<?php echo base_url();?>index.php/C_Main"><span style="color:#1c66fc;"><h3>Komplain Servis</h3></span></a></center><br>
							<center><a href="<?php echo base_url();?>index.php/C_Main"><img src="<?php echo base_url();?>tambah/img/g3.jpg" alt="" class="img-responsive"></a></center>
							<br><center>Komplain servis<br>
							<font face="Cambria">Pelayanan servis Expand - IT Solution bergaransi 5 hari setelah barang diambil dan mendapatkan nota pengembalian</font></center><br><br>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>

<!-- spasi section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- pricing section -->
<div id="lokasi">
		
				<div class="row peta">
				<div class="container-fluid">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15836.035592526941!2d112.09257252975645!3d-7.124964625067719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e778ed976553fe1%3A0xd9bf63d1db7df542!2sEXPAND+-+IT+Solution!5e0!3m2!1sid!2sid!4v1481998594228"  frameborder="0" style="border:none" allowfullscreen></iframe><br><br><div class="clear"></div>  <!-- width="1360" height="350" -->
				</div>
					
				</div>	
</div>	

<!-- spasi section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h2>Our Office</h2>
				
				<p>Email&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<span>expandbrn@gmail.com</span></p>
				<p>Phone&nbsp;&nbsp;:&nbsp;<span>0322 454579</span></p>
				<p>Alamat&nbsp;&nbsp;:&nbsp;<span>Jl. Raya No.314, Baureno, Kabupaten Bojonegoro, Jawa Timur 62192</span>
			</div>
			<div class="col-md-6 col-sm-6">
				<h2>Social </h2>
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/expandbrn/" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
				</ul>

			</div>
		</div>
	</div>
</footer>	

<!-- spasi section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright &copy; 2017 Programing by
                
               <br><a rel="nofollow" href="http://www.doniasrulafandi.96.lt/" target="_parent">Doni As'rul Afandi</a>
			</div>
		</div>
	</div>
</div>

<!-- scrolltop section -->
<a href="#top" class="go-top"><i class="fa fa-angle-up"></a>




</body>
</html>
<!-- javascript js -->	
<script src="<?php echo base_url();?>tambah2/js/jquery.js"></script>
<script src="<?php echo base_url();?>tambah2/js/bootstrap.min.js"></script>	
<script src="<?php echo base_url();?>tambah2/js/nivo-lightbox.min.js"></script>
<script src="<?php echo base_url();?>tambah2/js/smoothscroll.js"></script>
<script src="<?php echo base_url();?>tambah2/js/jquery.nav.js"></script>
<script src="<?php echo base_url();?>tambah2/js/isotope.js"></script>
<script src="<?php echo base_url();?>tambah2/js/imagesloaded.min.js"></script>
<script src="<?php echo base_url();?>tambah2/js/custom.js"></script>