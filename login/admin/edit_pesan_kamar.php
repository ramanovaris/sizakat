<?php 
session_start();
error_reporting(0);
include "../config/timeout.php";
//include "config/koneksi.php";
include "../config/koneksi.php";

$level=$_SESSION['level'];
$kode_akun=$_SESSION['kode_akun'];
$sesi_username          = isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL AND !empty($sesi_username) AND $_SESSION['level']=='Admin'  ) 
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
        <title>Edit Pesan Kamar - RSIA</title>

        <!-- date range picker -->
        <link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="

        stylesheet">
        
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="../plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
         <link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="../plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
         <link rel="stylesheet" href="assets/css/bootstrap-datepicker3"/>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

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
                                    <h4 class="page-title">Edit Pesan Kamar</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Dashboard</a>
                                        </li>
                                       
                                        <li class="active">
                                            Edit Pesan Kamar
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

                                            <h4 class="header-title m-t-0">Data Pesan</h4>
                                           
                                            <div class="p-20">
                                                <form  method="POST" action="code/simpan_edit_pesan_kamar.php">
                                                    <input type="hidden" name="kode_pesan" value="<?php echo $_GET[kode_pesan]; ?>">
                                                    <?php
$sql = mysql_query("SELECT pesan_kamar.kode_pesan,pasien.no_rm, pasien.nama_pasien, kamar.no_kamar, kamar.nama, kamar.biaya, pesan_kamar.tgl_keluar, pesan_kamar.tgl_pesan, pesan_kamar.status 
    FROM pesan_kamar
    JOIN pasien ON pesan_kamar.no_rm=pasien.no_rm
    JOIN kamar ON pesan_kamar.no_kamar=kamar.no_kamar WHERE pesan_kamar.kode_pesan='$_GET[kode_pesan]'")or die(mysql_error());
    $data = mysql_fetch_array($sql);
                                                    ?>

                                                    <div class="form-group">
                                                        <label for="userName">Nama Pasien<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="no_rm" data-placeholder="Pilih Pasien" required="">
                                                            <option value="<?php echo $data['no_rm']; ?>"><?php echo $data['no_rm']; ?> | <?php echo $data['nama_pasien']; ?></option>

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
                                                        <label for="userName">Kamar<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="no_kamar" data-placeholder="Pilih Kamar" required="" id="no_kamar" onchange="get_biaya()">
                                                            <option value="<?php echo $data['no_kamar']; ?>"><?php echo $data['no_kamar']; ?> | <?php echo $data['nama']; ?></option>

                                                    <?php
                                                     
                                                        $kota = mysql_query("SELECT * FROM kamar WHERE status='Tersedia' ORDER BY no_kamar");
                                                        while($p=mysql_fetch_array($kota))
                                                        {
                                                        echo "<option value=\"$p[no_kamar]\">$p[no_kamar] | $p[nama]</option>\n";
                                                        }
                                                    ?>
                                                     
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Biaya</label>
                                                        <input type="text" class="form-control" placeholder="" name="biaya" id="biaya" readonly="" value="<?php echo $data['biaya']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tanggal Pesan</label>
                                                        <div>
                                                            <div class="input-group">

                                                            <input type="date"   class="form-control" placeholder="yyyy-mm-dd" id="tgl_pesan" name="tgl_pesan" readonly=""  value="<?php echo $data['tgl_pesan']; ?>">

                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                     </div>

                                                    <div class="form-group">
                                                        <label>Tanggal Keluar</label>
                                                        <div>
                                                            <div class="input-group">

                                                                <input onchange="counthari()" type="text" class="form-control " placeholder="" readonly="" name="tgl_keluar"  required="" id="tgl_keluar">

                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Total Rawat Inap (Hari)</label>
                                                        <input type="text" class="form-control" placeholder="" name="total_hari" id="total_hari" onchange="math()" required onkeypress="return hanyaAngka(event)">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Total Pembayaran</label>
                                                        <input type="text" class="form-control" placeholder="" name="total_biaya" id="total_biaya" readonly="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userName">Status<span class="text-danger">*</span></label>

                                                        <select class="select2 form-control select2" name="status" data-placeholder="Status" required="">
                                                            <option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
                                                            <option value="Dipesan">Dipesan</option>
                                                            <option value="Dibatalkan">Dibatalkan</option>
                                                            <option value="Sudah Keluar">Sudah Keluar</option>
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

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

       

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
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
         <script src="../assets/js/datepicker/bootstrap-datepicker.js"></script>
        <script src="../plugins/autocomplete/jquery.mockjax.js"></script>
        <script src="../plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script src="../plugins/autocomplete/countries.js"></script>
        <script src="assets/pages/jquery.autocomplete.init.js"></script>

        <script src="assets/pages/jquery.form-advanced.init.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
          <script src="assets/js/jquery-1.12.4.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
           <script type="text/javascript">
            $(document).ready(function () {
               $('#tgl_keluar').datepicker({
                   dateFormat: 'yy-mm-dd',
                     autoclose:true,
                    minDate : new Date()
                });

            });


        </script>
         <script type="text/javascript">
        function get_biaya() {
            var no_kamar = document.getElementById('no_kamar').value;

            <?php
            $data = mysql_query("SELECT * FROM kamar");
            while($dataa=mysql_fetch_array($data))
            {
                $no_kamar=$dataa['no_kamar'];
            ?>

            if (no_kamar=='<?php echo $no_kamar;?>') {
                <?php 
                    $data2 = mysql_query("SELECT * FROM kamar WHERE no_kamar='$no_kamar'");
                    while($dataa=mysql_fetch_array($data2))
                    {
                        $biaya = $dataa['biaya'];
                    }
                ?>
            var biaya = <?php echo $biaya;?>;
            document.getElementById('biaya').value=biaya;
            }

            <?php } ?>    
        }


        </script>
      <!--    <script type="text/javascript">
            $(document).ready(function () {
                $('.tgl_keluar').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script> -->
        <script type="text/javascript">
        function math() {
            var a = document.getElementById('total_hari').value;
            var b = document.getElementById('biaya').value;
            var hasil = Number(a)*Number(b);

            var bilangan = hasil;
        
            var reverse = bilangan.toString().split('').reverse().join(''),
                ribuan  = reverse.match(/\d{1,3}/g);
                ribuan  = ribuan.join('.').split('').reverse().join('');

            document.getElementById('total_biaya').value='Rp. '+ribuan;    
        }
        </script>

        <script>
            function hanyaAngka(evt) {
              var charCode = (evt.which) ? evt.which : event.keyCode
               if (charCode > 31 && (charCode < 48 || charCode > 57))
     
                return false;
              return true;
            }
            function counthari() {
                var a = document.getElementById('tgl_pesan').value;
                var b = document.getElementById('tgl_keluar').value;

                var aDate = new Date(a);
                var bDate = new Date(b);

                var res = Math.abs(bDate-aDate);
                var dateDiff = Math.ceil(res / (1000*60*60*24));
                console.log(dateDiff)
                document.getElementById('total_hari').value = dateDiff;
                math();

            }
        </script>

        <script>
            var resizefunc = [];
        </script>
    </body>
</html>
<?php
}else{
    session_destroy();
    header('Location:..\index.php?status=Silahkan Login');
}
?>