<?php
include "config/koneksi.php";
$sql = mysql_query("SELECT * FROM pasien WHERE no_rm='$_GET[no_rm]'");
$i=1;
while ($data = mysql_fetch_array($sql)){
$no_rm = $data['no_rm'];
$nama = $data['nama_pasien'];

$i++;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan Kamar - RSIA</title>
    <meta name="description" content="">
    <meta name="author" content="rometheme.net">  
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/rsia.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="images/rsia.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="images/rsia.jpg">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script src="js/vendor/modernizr.min.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar-example">

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">

    	<!-- TOPBAR -->
    	<div class="topbar d-none d-md-block">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-4 col-md-2 col-lg-4">
						<p class="mb-0"><em>RSIA - Layanan Cepat Pesan Kamar</em></p>
					</div>
					<div class="col-sm-8 col-md-10 col-lg-8">
						<div class="info pull-right">
							
							<div class="info-item">
								<i class="fa fa-phone"></i> Call Us : (0512) 2021002
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-main" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">
						<img src="images/logo2.png" alt=""/>
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
			                <li class="nav-item dropdown">
			                <li class="nav-item">
			                    <a class="nav-link active" href="contact.html">Home</a>
			                </li>
			               
			                 
			                <li class="nav-item">
			                    <a class="nav-link" href="contact.html">Tentang</a>
			                </li>

			                <li class="nav-item">
			                    <a class="nav-link" href="login">login</a>
			                </li>
			            </ul>
			        </div>
			    </nav> <!-- -->
			</div>
		</div>

    </div>

	<!-- BANNER -->
    <div class="section banner-page" data-background="images/rsia.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Layanan Cepat Pesan Kamar</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				   
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>		

	<!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8">
						
						<h2 class="section-heading text-left mb-5">
							Pesan Kamar
						</h2>
						<p class="subheading text-left">Pesan Kamar cepat Atas Nama :</p>
						<form   action="simpan_pesan_kamar.php" method="POST" class="form-contact">
							<div class="row">

								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" readonly="" id="p_name" placeholder=" Masukkan No. RM" name="no_rm" required="" value="<?php  echo $no_rm  ?>">
										<div class="help-block with-errors"></div>
										
									</div>

								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" readonly="" id="p_name" placeholder="Masukkan Nama Lengkap" name="nama" required="" value="<?php  echo $nama  ?>" >
										<div class="help-block with-errors"></div>
									</div>
								</div>

							
								<div class="col-sm-6 col-md-6" hidden="">
									<div class="form-group">
										<input type="text" class="form-control" id="p_subject" placeholder="Subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-sm-6 col-md-6">
									<select class="select2 form-control select2" name="no_kamar" data-placeholder="Pilih Kamar" required="">
	                            <option value="">--Pilih Kamar--</option>

	                        <?php
	                         
	                            $kota = mysql_query("SELECT * FROM kamar WHERE status='Tersedia' ORDER BY no_kamar");
	                            while($p=mysql_fetch_array($kota))
	                            {
	                            echo "<option value=\"$p[no_kamar]\">$p[no_kamar] | $p[nama] | $p[jenis_kamar]</option>\n";
	                            }
	                        ?>
	                         
	                            </select>
								</div>
							</div>

							

							<br>

					
							<div class="text-left">
								<div id="success"></div>
									<button type="submit" class="btn btn-primary">PESAN</button>
							</div>
							
						</form>	
						<hr>

						
					</div>

					<div class="col-sm-12 col-md-12 col-lg-4">
						<h2 class="section-heading text-left mb-5">
							Detail Kontak
						</h2>
						<!-- Item 1 -->
						<div class="rs-icon-info-2">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="body-text">
								<h4>Alamat</h4>
								<p>Jalan A. Yani, Angsau, Pelaihari, Kabupaten Tanah Laut Kalimantan Selatan 70812</p>
							</div>
						</div>
						<!-- Item 2 -->
						<div class="rs-icon-info-2">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="body-text">
								<h4>Phone</h4>
								<p>(0512) 2021002 <br></p>
							</div>
						</div>
						<!-- Item 3 -->
						

					</div>
					
				</div>
			</div>
		</div>
		
		<!-- MAPS -->
		

	</div>
	
	<!-- CTA -->


	<!-- FOOTER SECTION -->
	<div class="footer">
		<div class="content-wrap pb-0">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<img src="images/logo2.png" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>RSU Borneo Citra Medika Tanah Laut - Memberikan Kenyamanan Pelayanan Kesehatan Ibu, Anak, Keluarga, dan Masyarakat Khususnya di Kabupaten Tanah Laut.</p>
							
						</div>
					</div>	

					

								

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								INFO KONTAK
							</div>
							
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="info-text">Jalan A. Yani, Angsau, Pelaihari, Kabupaten Tanah Laut Kalimantan Selatan 70812</div> </li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">(0512) 2021002</div>
								</li>
								
								<li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">7 x 24 Jam</div>
								</li>
							</ul>

						</div>
					</div>

				</div>
			</div>
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright 2019 &copy; <span class="color-primary">RSIA</span><span class="color-primary"></span></p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>

	
	<!-- JS VENDOR -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="js/vendor/isotope.pkgd.min.js"></script>
	<script src="js/vendor/imagesloaded.pkgd.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<!-- GOOGLEMAP -->
	<script src="js/googlemap-setting.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU&callback=initMap"> </script>

	<script src="js/script.js"></script>

</body>
</html>