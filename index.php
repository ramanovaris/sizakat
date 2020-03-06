<?php
include "config/koneksi.php";
error_reporting(0);
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
						<img src="images/baznas_header.png" alt="" style="width: 350px;
    height: 60px;" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
			                <li class="nav-item dropdown">
			                <li class="nav-item">
			                    <a class="nav-link active" href="index.php">Home</a>
			                </li>
			                <li class="nav-item dropdown">
			                	<a class="nav-link dropdown-toggle" href="profile_baznas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Profil BAZNAS TALA
						        </a>
						        <!-- <a class="nav-link dropdown-toggle" href="profile_baznas.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
						          Profil BAZNAS TALA
						        </a> -->
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="profile_baznas.php">Profil Kami</a>
						          <a class="dropdown-item" href="visi_misi.php">Visi & Misi</a>
						          <!-- <div class="dropdown-divider"></div> -->
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
						
						<h2 class="section-heading text-left mb-5">
							Hitung Zakat
						</h2>
						<p class="subheading text-left">Pilih Jenis Zakat :</p>
						<form   action="" method="get" class="form-contact">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<select name="jenis_zakat" id="jenis_zakat" class="form-control" onchange="form.submit()">
                                                <option value="0" >-- Pilih Jenis Zakat --</option>
                                                <option value="1" <?php if($_GET['jenis_zakat'] == '1'){echo "selected";}?>>Zakat Penghasilan</option>
                                                <option value="2" <?php if($_GET['jenis_zakat'] == '2'){echo "selected";}?>>Zakat Pertanian</option>
                                                
                                        </select>
									</div>
									<hr>
									<?php
									if($_GET['jenis_zakat'] == '1'){
									?>	
										<h4>
											Penghasilan / Pemasukkan
										</h4>
										<label>Penghasilan/Gaji Saya per Bulan</label>
										<div class="form-group">
											<input type="text" class="form-control" id="gaji" name="gaji" required="" value="0" onkeyup="hitung_penghasilan()" autocomplete="off">
											<div class="help-block with-errors"></div>
										</div>
										<label>Pendapatan Lain-lain(/Bulan)</label>
										<div class="form-group">
											<input type="text" class="form-control" id="lain2" name="lain2" onkeyup="hitung_penghasilan()" value="0" autocomplete="off" >
											<div class="help-block with-errors"></div>
										</div>
										<label>Hutang/Cicilan (/Bulan)</label>
										<div class="form-group">
											<input type="text" class="form-control" id="hutang_cicilan" onkeyup="hitung_penghasilan()" value="0" name="hutang_cicilan" autocomplete="off" >
											<div class="help-block with-errors"></div>
										</div>
										<label><b>Pemasukan / Pendapatan per Bulan</b></label>
										<div class="form-group">
											<input type="text" class="form-control" id="gaji_bersih" name="gaji_bersih" value="0" autocomplete="off" disabled="">
											<div class="help-block with-errors"></div>
										</div>

										<h4>NISAB</h4>
										<label>Harga beras saat ini (/Kg)</label>
										<div class="form-group">
											<input type="text" class="form-control" id="beras" name="beras" onkeyup="hitung_penghasilan()" value="10900" autocomplete="off" >
											<div class="help-block with-errors"></div>
										</div>
										<label>Besarnya nishab</label>
										<div class="form-group">
											<input type="text" class="form-control" id="nishab" name="nishab" value="0" autocomplete="off" disabled="">
											<div class="help-block with-errors"></div>
										</div>
										<label>Wajib membayar zakat profesi?</label>
										<div class="form-group">
											<input type="text" class="form-control" id="wajib_tidak" name="wajib_tidak" value="0" autocomplete="off" disabled="">
											<div class="help-block with-errors"></div>
										</div>
										<label><b>Jumlah Yang Dibayarkan pertahun</b></label>
										<div class="form-group">
											<input type="text" class="form-control" id="jum_dibayarkan_thn" name="jum_dibayarkan_thn" value="0" autocomplete="off" disabled="">
											<div class="help-block with-errors"></div>
										</div>
										<label><b>Jumlah Yang Dibayarkan perbulan</b></label>
										<div class="form-group">
											<input type="text" class="form-control" id="jum_dibayarkan_bln" name="jum_dibayarkan_bln" value="0" autocomplete="off" disabled="">
											<div class="help-block with-errors"></div>
										</div>
										<input type="reset" value="Hitung Ulang" style="background-color: #5CB85C; color: white;" />
									<?php } ?>

									<?php
									if ($_GET['jenis_zakat'] == '2'){
									?>	
										<!-- <h4>
											Penghasilan / Pemasukkan
										</h4> -->
										<label>Hasil Panen (kg)</label>
										<div class="form-group">
											<input type="text" class="form-control" id="hasil_panen" name="hasil_panen" required="" value="0" onkeyup="hit_zakat_pertanian_hasil_penen()" autocomplete="off">
											<div class="help-block with-errors"></div>
										</div>
										<label>Lama Panen (Bulan)</label>
										<div class="form-group">
											<input type="text" class="form-control" id="lama_panen" name="lama_panen" onkeyup="hit_zakat_pertanian_hasil_penen()" value="0" autocomplete="off" >
											<div class="help-block with-errors"></div>
										</div>
										<label>Air Hujan (Bulan)</label>
										<div class="form-group">
											<input type="text" class="form-control" id="air_hujan" value="0" name="air_hujan" onkeyup="hit_zakat_pertanian_hasil_penen()" autocomplete="off" >
											<div class="help-block with-errors"></div>
										</div>
										<label>Usaha Sendiri (Bulan)</label>
										<div class="form-group">
											<input type="text" class="form-control" id="usaha_sendiri" name="usaha_sendiri" onkeyup="hit_zakat_pertanian_hasil_penen()" value="0" autocomplete="off">
											<div class="help-block with-errors"></div>
										</div>
										<label>Zakat yang harus dibayarkan (kg)</label>
										<div class="form-group">
											<input type="text" class="form-control" id="zakat_yang_dibayarkan" name="zakat_yang_dibayarkan" value="0" autocomplete="off" disabled="">
											<div class="help-block with-errors"></div>
										</div>
										<input type="reset" value="Hitung Ulang" style="background-color: #5CB85C; color: white;" />
									<?php } ?>
								</div>
							</div>
						</form>	
						<script type="text/javascript">

			            function hitung_penghasilan(){
							var gaji = $("#gaji").val();	
							var lain2 = $("#lain2").val();
							var hutang_cicilan = $("#hutang_cicilan").val();
							var gaji_bersih = $("#gaji_bersih").val();

							var total_bersih;

							total_bersih = (parseInt(gaji)+parseInt(lain2))-parseInt(hutang_cicilan);

							$('#gaji_bersih').val(total_bersih);

							var harga_beras, nishab, zakat_bln, zakat_thn;
							var beras_kg = 524;

							harga_beras = $("#beras").val();
							nishab = harga_beras*beras_kg;

							$('#nishab').val(nishab);

							if (total_bersih < nishab) {
								$('#wajib_tidak').val('Tidak');
								$('#jum_dibayarkan_bln').val('0');
								$('#jum_dibayarkan_thn').val('0');
							}
							else{
								$('#wajib_tidak').val('Ya');

								zakat_bln = (2.5/100)*total_bersih;
								zakat_thn = zakat_bln*12;

								$('#jum_dibayarkan_bln').val(zakat_bln);
								$('#jum_dibayarkan_thn').val(zakat_thn);
							}
			            }

			            function hit_zakat_pertanian_hasil_penen(){
							var hasil_panen, lama_panen, air_hujan, usaha_sendiri;

							var total_panen, total_air_hujan, total_usaha_sendiri;

							var persen_air_hujan, persen_usaha_sendiri, zakat_yang_dibayarkan;

							hasil_panen = $("#hasil_panen").val();
							lama_panen = $("#lama_panen").val();
							air_hujan = $("#air_hujan").val();
							usaha_sendiri = $("#usaha_sendiri").val();

							total_panen = hasil_panen / lama_panen;

							total_air_hujan = total_panen * air_hujan;
							total_usaha_sendiri = total_panen * usaha_sendiri;

							persen_air_hujan = total_air_hujan * (5/100);
							persen_usaha_sendiri = total_usaha_sendiri * (10/100);

							zakat_yang_dibayarkan = persen_usaha_sendiri + persen_air_hujan;

							$('#zakat_yang_dibayarkan').val(zakat_yang_dibayarkan);
							// alert(persen_air_hujan+' , '+persen_usaha_sendiri);


							// alert(hasil_panen+', '+lama_panen+', '+air_hujan+', '+usaha_sendiri+', '+zakat_yang_dibayarkan);
			            }

       					</script>
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