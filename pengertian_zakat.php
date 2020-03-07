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
			                	<a class="nav-link dropdown-toggle" href="sop.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Aturan dan Ketentuan
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="sop.php">SOP Penerimaan ZIS</a>
						          <a class="dropdown-item" href="pengelolaan_zis.php">Pengelolaan ZIS</a>
						          <a class="dropdown-item" href="syarat_pengajuan_bantuan.php">Syarat Pengajuan Bantuan/Santunan</a>
						        </div>
						      </li>
			          		<li class="nav-item">
			                    <a class="nav-link active" href="pengertian_zakat.php">Tentang Zakat</a>
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
				<div class="title-page" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000">Sistem Infomasi Badan Amil Zakat Nasional Kabupaten Tanah Laut</div>
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
						
						<h2 class="section-heading text-left mb-4">
							Panduan Zakat
						</h2>
						<p class="subheading" style="color: black;" align="justify">Zakat adalah harta tertentu yang dikeluarkan apabila telah mencapai syarat yang diatur sesuai aturan agama, dikeluarkan kepada 8 asnaf penerima zakat. Menurut Bahasa kata “zakat” berarti tumbuh, berkembang, subur atau bertambah.</p>
						<p class="subheading" style="color: black;" align="justify">Zakat berasal dari bentuk kata "zaka" yang berarti suci, baik, berkah, tumbuh, dan berkembang. Dinamakan zakat, karena di dalamnya terkandung harapan untuk beroleh berkah, membersihkan jiwa dan memupuknya dengan berbagai kebaikan (Fikih Sunnah, Sayyid Sabiq: 5)</p>

						<p class="subheading" style="color: black;" align="justify">Makna tumbuh dalam arti zakat menunjukkan bahwa mengeluarkan zakat sebagai sebab adanya pertumbuhan dan perkembangan harta, pelaksanaan zakat itu mengakibatkan pahala menjadi banyak. Sedangkan makna suci menunjukkan bahwa zakat adalah mensucikan jiwa dari kejelekan, kebatilan dan pensuci dari dosa-dosa.</p>
						<p class="subheading" style="color: black;" align="justify">Dalam Al-Quran disebutkan, “Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan menyucikan mereka” (QS. at-Taubah [9]: 103).</p>
						<p class="subheading" style="color: black;" align="justify">Menurut istilah dalam kitab al-Hâwî, al-Mawardi mendefinisikan zakat dengan nama pengambilan tertentu dari harta tertentu, menurut sifat-sifat tertentu dan untuk diberikan kepada golongan tertentu. Orang yang menunaikan zakat disebut Muzaki. Sedangkan orang yang menerima zakat disebut Mustahik.</p>
						<hr>
						<h2 class="section-heading text-left mb-4">
							Asnaf (8 Golongan) Penerima Zakat
						</h2>
						<p class="subheading" style="color: black;" align="justify">Sebagai instrumen yang masuk dalam salah satu Rukun Islam, zakat tentu saja memiliki aturan mengikat dari segi ilmu fiqihnya, salah satu diantaranya adalah kepada siapa zakat diberikan.</p>
						<p class="subheading" style="color: black;" align="justify">Dalam QS. At-Taubah ayat 60, Allah memberikan ketentuan ada delapan golongan orang yang menerima zakat yaitu sebagai berikut:</p>
						<p class="subheading" style="color: black;" align="justify">1.	Fakir, mereka yang hampir tidak memiliki apa-apa sehingga tidak mampu memenuhi kebutuhan pokok hidup.</p>
						<p class="subheading" style="color: black;" align="justify">2.	Miskin, mereka yang memiliki harta namun tidak cukup untuk memenuhi kebutuhan dasar kehidupan.</p>
						<p class="subheading" style="color: black;" align="justify">3.	Amil, mereka yang mengumpulkan dan mendistribusikan zakat.</p>
						<p class="subheading" style="color: black;" align="justify">4.	Mu'allaf, mereka yang baru masuk Islam dan membutuhkan bantuan untuk menguatkan dalam tauhid dan syariah.</p>
						<p class="subheading" style="color: black;" align="justify">5.	Hamba sahaya, budak yang ingin memerdekakan dirinya.</p>
						<p class="subheading" style="color: black;" align="justify">6.	Gharimin, mereka yang berhutang untuk kebutuhan hidup dalam mempertahankan jiwa dan izzahnya.</p>
						<p class="subheading" style="color: black;" align="justify">7.	Fisabilillah, mereka yang berjuang di jalan Allah dalam bentuk kegiatan dakwah, jihad dan sebagainya.</p>
						<p class="subheading" style="color: black;" align="justify">8.	Ibnu Sabil, mereka yang kehabisan biaya di perjalanan dalam ketaatan kepada Allah.</p>
						<hr>
						<h2 class="section-heading text-left mb-4">
							Jenis Zakat
						</h2>
						<p class="subheading" style="color: black;" align="justify">Secara umum zakat terbagi menjadi dua jenis, yakni zakat fitrah dan zakat maal. Zakat Fitrah (zakat al-fitr) adalah zakat yang diwajibkan atas setiap jiwa baik lelaki dan perempuan muslim yang dilakukan pada bulan Ramadhan... <a href="zakat_fitrah.php" style="color: blue;">Selengkapnya</a>. </p>
						<p class="subheading" style="color: black;" align="justify">Zakat maal adalah zakat harta yang dikenakan atas uang, emas, surat berharga, dan aset yang disewakan (Al Qur'an Surah At Taubah ayat 103, Peraturan Menteri Agama No 52/2014 dan pendapat Shaikh Yusuf Qardawi). Secara lebih rinci, zakat maal ini memiliki jenis zakat lainnya seperti;</p>
						<p class="subheading" style="color: black;" align="justify">1.	Zakat penghasilan
Zakat penghasilan atau yang dikenal juga sebagai zakat zakat profesi adalah bagian dari zakat maal yang wajib dikeluarkan atas harta yang berasal dari pendapatan / penghasilan rutin dari pekerjaan yang tidak melanggar syariah. <a href="zakat_penghasilan.php" style="color: blue;">Selengkapnya</a></p>
						<p class="subheading" style="color: black;" align="justify">2.	Zakat emas dan perak
Zakat emas, perak, dan logam mulia lainnya adalah zakat yang dikenakan atas emas, perak dan logam lainnya yang telah mencapai nisab dan haul. <a href="zakat_emas_perak.php" style="color: blue;">Selengkapnya</a></p>
						<p class="subheading" style="color: black;" align="justify">3.	Zakat perusahaan
Para ulama peserta Muktamar Internasional Pertama tentang zakat di Kuwait (29 Rajab 1404 H), menganalogikan zakat perusahaan kepada zakat perdagangan. Hal ini dikarenakan, jika dipandang dari aspek legal dan ekonomi, kegiatan sebuah perusahaan intinya berpijak pada kegiatan trading atau perdagangan. <a href="Zakat_perusahaan.php" style="color: blue;">Selengkapnya</a></p>
						<p class="subheading" style="color: black;" align="justify">4.	Zakat perdagangan
Zakat perdagangan adalah zakat yang dikeluarkan dari harta niaga, sedangkan harta niaga adalah harta atau aset yang diperjualbelikan dengan maksud untuk mendapatkan keuntungan. Dengan demikian maka dalam harta niaga harus ada 2 motivasi: Motivasi untuk berbisnis (diperjualbelikan) dan motivasi mendapatkan keuntungan. <a href="zakat_perdagangan.php" style="color: blue;">Selengkapnya</a></p>
						<p class="subheading" style="color: black;" align="justify">5.	Zakat saham
Zakat saham ditetapkan berdasarkan kesepakatan para ulama pada Muktamar Internasional Pertama tentang zakat di Kuwait (29 Rajab 1404 H) bahwa hasil dari keuntungan investasi saham wajib dikeluarkan zakatnya. <a href="zakat_saham.php" style="color: blue;">Selengkapnya</a></p>
						<p class="subheading" style="color: black;" align="justify">6.	Zakat reksadana
Zakat reksadana ditetapkan berdasarkan kesepakatan para ulama pada Muktamar Internasional Pertama tentang zakat di Kuwait (29 Rajab 1404 H) bahwa hasil dari keuntungan investasi wajib dikeluarkan zakatnya. Zakat reksadana dapat ditunaikan jika hasil keuntungan investasi sudah mencapai nisab. Nisab zakat reksadana sama nilainya dengan nisab zakat maal yaitu senilai 85 gram emas dengan tarif zakat 2,5% dan sudah mencapai satu tahun (haul). <a href="zakat_reksadana.php" style="color: blue;">Selengkapnya</a></p>
						<p class="subheading" style="color: black;" align="justify">7.	Zakat rikaz (zakat dari hasil barang temuan)</p>
						<p class="subheading" style="color: black;" align="justify">8.	Zakat pertanian</p>
						<p class="subheading" style="color: black;" align="justify">9.	Zakat peternakan</p>
						<p class="subheading" style="color: black;" align="justify">10.	Dan lain sebagainya.</p>
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