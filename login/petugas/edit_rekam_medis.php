<?php 
session_start();
error_reporting(0);
include "../config/timeout.php";
//include "config/koneksi.php";
include "../config/koneksi.php";

$level=$_SESSION['level'];
$kode_login=$_SESSION['kode_login'];
$sesi_username          = isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL AND !empty($sesi_username) AND $_SESSION['level']=='Petugas'  ) 
{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Edit Rekam Medis - RSIA</title>

        <!-- date range picker -->
       
        <link href="../plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
                    <script src="../assets/js/jquery.2.1.1.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

        <?php
            include "header.php";
        ?>
            


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        

                        <?php
                            include "data_diri.php";
                            include "navigasi.php"; 
                         ?>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <?php
                        include"kontak.php";
                    ?>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Edit Rekam Medis</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Dashboard</a>
                                        </li>
                                       
                                        <li class="active">
                                            Edit Rekam Medis
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-8">

                                            <h4 class="header-title m-t-0">Edit Rekam Medis</h4>
                                           
                                            <div class="p-20">
                                                <form  method="POST" action="code/simpan_edit_rekam_medis.php">
                                                    <input type="hidden" name="kode_rm" value="<?php echo $_GET[kode_rm];  ?>">

                                                    <?php 
                                                $no = 1;
                                                $query_mysql = mysql_query("SELECT rekam_medis.jenis_perawatan,rekam_medis.jaminan,rekam_medis.no_rm,rekam_medis.tanggal_meminjam, rekam_medis.tanggal_mengembalikan, rekam_medis.status, petugas.nama_petugas, dokter.nama_dokter, perawat.nama_perawat, poli.nama_poli, pasien.nama_pasien, petugas.nik_petugas, dokter.nik_dokter, perawat.nik_perawat, poli.kode_poli, pasien.no_rm FROM rekam_medis
                                                LEFT JOIN petugas ON rekam_medis.nik_petugas=petugas.nik_petugas
                                                LEFT JOIN dokter ON rekam_medis.nik_dokter=dokter.nik_dokter
                                                LEFT JOIN perawat ON rekam_medis.nik_perawat=perawat.nik_perawat
                                                LEFT JOIN poli ON rekam_medis.kode_poli=poli.kode_poli
                                                LEFT JOIN pasien ON rekam_medis.no_rm=pasien.no_rm WHERE rekam_medis.kode_rm='$_GET[kode_rm]'")or die(mysql_error());
                                                $data = mysql_fetch_array($query_mysql);

                                            ?>

                                                     <div class="form-group">
                                                        <label for="userName">Nama Pasien<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="no_rm" data-placeholder="Pilih Pasien" required="">
                                                            <option value="<?php echo $data['no_rm']; ?>"><?php echo $data['nama_pasien']; ?></option>

                                                    <?php
                                                     
                                                        $kota = mysql_query("SELECT * FROM pasien ORDER BY no_rm");
                                                        while($p=mysql_fetch_array($kota))
                                                        {
                                                        echo "<option value=\"$p[no_rm]\">$p[no_rm] | $p[nama_pasien]</option>\n";
                                                        }
                                                    ?>
                                                     
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userName">Nama Poli<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="kode_poli" id="kode_poli" data-placeholder="Pilih Poli" required="">
                                                            <option value="<?php echo $data['kode_poli']; ?>"><?php echo $data['nama_poli']; ?></option>

                                                    <?php
                                                     
                                                        $kota = mysql_query("SELECT * FROM poli ORDER BY kode_poli");
                                                        while($p=mysql_fetch_array($kota))
                                                        {
                                                        echo "<option value=\"$p[kode_poli]\">$p[nama_poli]</option>\n";
                                                        }
                                                    ?>
                                                     
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userName">Dokter<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="nik_dokter" id="dokter" data-placeholder="" required="">
                                                            <option value="<?php echo $data['nik_dokter']; ?>"><?php echo $data['nama_dokter']; ?></option>

                                                   
                                                
                                                     
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userName">Perawat<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="nik_perawat" data-placeholder="Pilih Perawat" required="">
                                                            <option value="<?php echo $data['nik_perawat']; ?>"><?php echo $data['nama_perawat']; ?></option>

                                                    <?php
                                                     
                                                        $kota = mysql_query("SELECT * FROM perawat ORDER BY nik_perawat");
                                                        while($p=mysql_fetch_array($kota))
                                                        {
                                                        echo "<option value=\"$p[nik_perawat]\">$p[nama_perawat]</option>\n";
                                                        }
                                                    ?>
                                                     
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Jaminan<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="jaminan" data-placeholder="Pilih Jaminan" required="">
                                                            <option value="<?php echo $data['jaminan']; ?>"><?php echo $data['jaminan']; ?></option>
                                                            <option value="BPJS">BPJS</option>
                                                            <option value="Umum">Umum</option>
                                                            <option value="Asuransi">Asuransi</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userName">Jenis Perawatan<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="jenis_perawatan" data-placeholder="Jenis Perawatan" required="">
                                                            <option value="<?php echo $data['jenis_perawatan']; ?>"><?php echo $data['jenis_perawatan']; ?></option>
                                                            <option value="Rawat Jalan">Rawat Jalan</option>
                                                            <option value="Rawat Inap">Rawat Inap</option>

                                                        </select>
                                                    </div>

                                                   

                                                    <div class="form-group row">
                                                        <div class="col-sm-8 col-sm-offset-4">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Simpan
                                                            </button>
                                                            <button type="reset"
                                                                    class="btn btn-default waves-effect m-l-5" value="Go Back" onclick="history.back(-1)">
                                                                Batal
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

                                                
                                            </div>

                                        </div>

                                       
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                        <!-- end row -->

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <?php 
                    include "footer.php";
                ?>
           

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
         
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
         <script src="../assets/js/jquery.2.1.1.min.js"></script>

            </div>
            <script type="text/javascript">
                var htmlobjek;
                $(document).ready(function(){
                $("#kode_poli").change(function(){
                var kode_poli = $("#kode_poli").val();
                $.ajax({
                url: "ambil_dokter.php",
                data: "kode_poli="+kode_poli,
                cache: false,
                success: function(msg){
                //jika data sukses diambil dari server kita tampilkan
                //di <select id=tempat>
                $("#dokter").html(msg);
                }
                });
                });
                });
            </script>




        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="../plugins/multiselect/js/jquery.multi-select.js"></script>
        <script src="../plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="../plugins/select2/js/select2.min.js"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
       

        <script src="assets/pages/jquery.form-advanced.init.js"></script>


        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php
}else{
    session_destroy();
    header('Location:..\index.php?status=Silahkan Login');
}
?>