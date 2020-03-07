<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIZAKAT</title>
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

<body data-spy="scroll" data-target="#navbar-example" text="black">

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
						<p class="mb-0"><em>BAZNAS Tanah Laut</em></p>
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
						<img src="images/baznas_tala_header.png" alt="" style="width: 60px;
    height: 35px;" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav">
			                <li class="nav-item dropdown">
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php">Home</a>
			                </li>
			                <li class="nav-item dropdown">
			                	<a class="nav-link dropdown-toggle" href="profile_baznas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Program BAZNAS TALA
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="tala_cerdas.php">Program TALA Cerdas</a>
						          <a class="dropdown-item" href="tala_makmur.php">Program TALA Makmur</a>
						          <a class="dropdown-item" href="tala_peduli.php">Program TALA Peduli</a>
						          <a class="dropdown-item" href="tala_sehat.php">Program TALA Sehat</a>
						          <a class="dropdown-item" href="tala_taqwa.php">Program TALA Taqwa</a>
						        </div>
						     </li>
			                <li class="nav-item dropdown">
			                	<a class="nav-link dropdown-toggle" href="profile_baznas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Profil BAZNAS TALA
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="profile_baznas.php">Profil Kami</a>
						          <a class="dropdown-item" href="visi_misi.php">Visi & Misi</a>
						          <a class="dropdown-item" href="struktur_organisasi.php">Struktur Organisasi</a>
						        </div>
						    </li>
						    <li class="nav-item dropdown">
			                	<a class="nav-link active dropdown-toggle" href="sop.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Aturan dan Ketentuan
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="sop.php">SOP Penerimaan ZIS</a>
						          <a class="dropdown-item" href="pengelolaan_zis.php">Pengelolaan ZIS</a>
						          <a class="dropdown-item active" href="syarat_pengajuan_bantuan.php">Syarat Pengajuan Bantuan/Santunan</a>
						        </div>
						      </li>
			          		<li class="nav-item">
			                    <a class="nav-link" href="pengertian_zakat.php">Tentang Zakat</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="login">Login</a>
			                </li>
			            </ul>
			        </div>
			    </nav> <!-- -->
			</div>
		</div>

    </div>

	<!-- BANNER -->
    <div class="section banner-page" data-background="images/baznas_tala.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000">Syarat Pengajuan Bantuan/Santunan</div>
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
						
						<h2 class="section-heading text-center mb-4">
							Syarat Pengajuan Bantuan/Santunan berdasarkan Peraturan Ketua Badan Amil Zakat Nasional Kabupaten Tanah Laut
Nomor: 01/P/BAZNAS-TALA/VI/2016
						</h2>
						<h2 class="section-heading text-left mb-4">
							MEKANISME PENGAJUAN BANTUAN/SANTUNAN
						</h2>
						<p class="subheading" style="color: black; margin-left: 3%" align="justify">1. Surat permohonan diketahui Lurah/Kades <br> 2. Foto kopi KTP dan atau Kartu Keluarga (KK) <br> 3. Surat keterangan tidak mampu dari RT/Lurah/Kades</p>
						<p class="subheading" style="color: black" align="justify">Untuk program Ekonomi ditambah :</p>
						<p class="subheading" style="color: black; margin-left: 3%" align="justify">1. Rencana rincian biaya dan jumlah yang diperlukan tiap orang <br> 2. Surat Keterangan usaha ekonomi lemah dari Lurah/Kades <br> 3. Hal lain bila ada tambahan yang diperlukan.</p>

						<h2 class="section-heading text-left mb-4">
							PENGAJUAN BANTUAN BANGUN/REHAB MESJID/LANGGAR/TPA
						</h2>
						<p class="subheading" style="color: black" align="justify">1. Proposal Permohonan Bantuan Pembangunan/Rehab Mesjid/Langgar/Tempat Pendidikan Al Qur’an (TPA), yang dilengkapi dengan :</p>
						<p class="subheading" style="color: black; margin-left: 3%" align="justify">- Surat Permohonan yang diketahui oleh Lurah/Kepala Desa/Camat setempat <br> - Rencana Anggaran Biaya (RAB) <br> - Susunan Panitia Pelaksana Pembangunan/Rehab</p>
						<p class="subheading" style="color: black" align="justify">2. Lampiran</p>
						<p class="subheading" style="color: black; margin-left: 3%" align="justify">- Fotocopi KTP Ketua dan Sekretaris Panitia Pelaksana. <br> - Foto obyek mesjid/langgar/TPA yang akan dibangun/rehab</p>

						<h2 class="section-heading text-left mb-4">
							PERMOHONAN BANTUAN BEASISWA
						</h2>
						<p class="subheading" style="color: black" align="justify">1. Mengisi formulir calon penerima beasiswa Baznas <br> 2. Surat Permohonan (menyertakan tanda tangan orangtua/wali) <br> 3. Fotocopi KTP orangtua/wali dan kartu mahasiswa <br> 4. Fotocopi KK <br> 5. Surat Keterangan Tidak Mampu dari RT/Kepala Desa/Lurah (asli & terbaru) <br> 6. Surat Keterangan masih aktif kuliah minimal semester IV <br> 7. Lembar Hasil Studi (LHS) terakhir <br> 8. Bukti pembayaran SPP terakhir <br> 9. Foto berwarna 3 x 4 cm sebanyak 4 lembar</p>

						<h2 class="section-heading text-left mb-4">
							PENGAJUAN BANTUAN USAHA PRODUKTIF
						</h2>
						<p class="subheading" style="color: black" align="justify">1. Surat Permohonan Bantuan Modal Usaha Produktif yang berisi :</p>
						<p class="subheading" style="color: black; margin-left: 3%" align="justify">- Rincian biaya modal <br>- Asumsi/perkiraan keuntungan.</p>
						<p class="subheading" style="color: black" align="justify">2. Fotocopi Kartu Tanda Penduduk/KTP <br> 3. Fotocopi Kartu Keluarga/KK <br> 4. Surat Keterangan Ketua RT/Lurah/Kepala Desa</p>

						<h2 class="section-heading text-left mb-4">
							PERMOHONAN BANTUAN BANGUN/REHAB RUMAH LAYAK HUNI
						</h2>
						<p class="subheading" style="color: black" align="justify">1. Surat Permohonan Bantuan Pembangunan/rehab rumah layak huni, yang berisi :</p>
						<p class="subheading" style="color: black; margin-left: 3%" align="justify">- Rincian Anggaran Biaya <br> - Rencana Ukuran Bangunan <br> - Foto obyek rumah/bagian rumah yang akan direhab/diperbaiki</p>
						<p class="subheading" style="color: black" align="justify">2. Fotocopi Kartu Tanda Penduduk/KTP <br> 3. Fotocopi Kartu Keluarga/KK <br> 4. Surat Keterangan Tidak Mampu dari RT/Lurah/Kepala Desa <br> 5. Surat Keterangan Lahan/Lokasi/Tanah milik sendiri <br> 6. Surat Keterangan Lahan/Lokasi/Tanah tidak bermasalah/tidak dalam sengketa <br> 7. Struktur Panitia Pembangunan (kalau ada)</p>

						<h2 class="section-heading text-left mb-4">
							PENGAJUAN BANTUAN BIAYA BEROBAT
						</h2>
						<p class="subheading" style="color: black" align="justify">1. Surat Permohonan bantuan biaya berobat <br> 2. Fotocopi KTP <br> 3. Fotocopi KK <br> 4. Surat Keterangan Tidak Mampu dari RT/Lurah/Kepala Desa (asli & terbaru) <br> 5. Surat Keterangan Sakit/Rujukan <br> 6. Slip pembayaran rumah sakit</p>
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
						<!-- <div class="footer-item">
							<img src="images/logo2.png" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>RSU Borneo Citra Medika Tanah Laut - Memberikan Kenyamanan Pelayanan Kesehatan Ibu, Anak, Keluarga, dan Masyarakat Khususnya di Kabupaten Tanah Laut.</p>
							
						</div> -->
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
						<p class="ftex">Copyright 2019 &copy; <span class="color-primary">BAZNAS Tanah Laut</span><span class="color-primary"></span></p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>

	
	<!-- JS VENDOR -->
	        <script src="js/jquery.2.1.1.min.js"></script>

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