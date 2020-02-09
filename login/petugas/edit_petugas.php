<?php 
session_start();
error_reporting(0);
include "../config/timeout.php";
//include "config/koneksi.php";
include "../config/koneksi.php";

$level=$_SESSION['level'];
$kode_login=$_SESSION['kode_login'];
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
        <title>Edit Petugas - RSIA</title>

        <!-- date range picker -->
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
                                    <h4 class="page-title">Edit Petugas</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Dashboard</a>
                                        </li>
                                       
                                        <li class="active">
                                            Edit Petugas
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

                                            <h4 class="header-title m-t-0">Edit Petugas</h4>
                                           
                                            <div class="p-20">
                                                <form  method="POST" action="code/simpan_edit_petugas.php">

                                                    <?php
                                                        $sql = mysql_query("SELECT * FROM petugas WHERE id_petugas='$_GET[nik_petugas]'"); 
                                                        $data = mysql_fetch_array($sql);
                                                      
                                                    ?>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id_petugas" parsley-trigger="change" required
                                                               placeholder="Nama Lengkap" class="form-control" id="id_petugas" value="<?php echo $data['id_petugas']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="userName">Nama Lengkap<span class="text-danger">*</span></label>
                                                        <input type="text" name="nama_petugas" parsley-trigger="change" required
                                                               placeholder="Nama Lengkap" class="form-control" id="userName" value="<?php echo $data['nama']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                    <label for="userName">Jenis Kelamin<span class="text-danger">*</span></label><br>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="Laki-laki" name="jenis_kelamin" <?php if($jk=="Laki-laki"){echo "checked";}?>>
                                                            <label for="inlineRadio1">Laki-laki</label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="Perempuan" name="jenis_kelamin" <?php if($jk=="Perempuan"){echo "checked";}?>>
                                                            <label for="inlineRadio2">Perempuan</label>
                                                        </div>
                                                    </div>

                                                    

                                                    <div class="form-group">
                                                        <label for="userName">Jabatan<span class="text-danger">*</span></label>
                                                        <input type="text" name="jabatan" parsley-trigger="change" required
                                                               placeholder="Alamat" class="form-control" id="userName" value="<?php echo $data['jabatan']; ?>"  >
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
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

        <script src="../plugins/autocomplete/jquery.mockjax.js"></script>
        <script src="../plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script src="../plugins/autocomplete/countries.js"></script>
        <script src="assets/pages/jquery.autocomplete.init.js"></script>

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