<?php 
session_start();
error_reporting(0);
include "../config/timeout.php";
//include "config/koneksi.php";
include "../config/koneksi.php";

$status_pesan = @$_GET['status_pesan'];
$no_kamar = @$_GET['no_kamar'];

function dateBahasaIndo($tgl_isi_kuis){

$bulan=array(

                '01'=>'Januari',
                '02'=>'Februari',
                '03'=>'Maret',
                '04'=>'April',
                '05'=>'Mei',
                '06'=>'Juni',
                '07'=>'Juli',
                '08'=>'Agustus',
                '09'=>'September',
                '10'=>'Oktober',
                '11'=>'November',
                '12'=>'Desember',
            );

$pecah=explode('-',$tgl_isi_kuis);

$tgl=$pecah[2];
$bln=$pecah[1];
$thn=$pecah[0];
return $tgl.' '.$bulan[$bln].' '.$thn;
}

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
        <title>Lihat Riwayat Pesan Kamar - RSIA</title>

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
            
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Data Riwayat Pesan Kamar</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Dashboard</a>
                                        </li>
                                       
                                        <li class="active">
                                            Data Pesan Kamar
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Data Riwayat Pesan Kamar</b>
                                        <form action="" method="get" enctype="multipart/form-data" > 
                                        <div class="col-md-3" hidden="">
                                            <select  name="no_kamar" id="no_kamar"  class="form-control" onchange="form.submit()" >
                                                <option value="0">Semua Data</option>
                                                 <?php
                                                $q = mysql_query("SELECT * FROM pesan_kamar"); 
                                                  while ($a = mysql_fetch_array($q)){
                                                  if ($a['1'] ==$no_kamar) {
                                                    echo "<option value='$a[1]' selected>$a[1]</option>";
                                                  } else {
                                                  echo "<option value='$a[1]'>$a[1]</option>";
                                                  }
                                                    }
                                                  ?>   
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="status_pesan" id="status_pesan" class="form-control" onchange="form.submit()">
                                                 <?php
                                                $q = mysql_query("SELECT * FROM pesan_kamar GROUP BY status"); 
                                                  while ($a = mysql_fetch_array($q)){
                                                  if ($a['5'] ==$status_pesan) {
                                                    echo "<option value='$a[5]' selected>$a[5]</option>";
                                                  } else {
                                                  echo "<option value='$a[5]'>$a[5]</option>";
                                                  }
                                                    }
                                                  ?>   
                                            </select>
                                        </div>
                                     </form>
                                    </h4><br><br>
                                    <table id="datatable-responsive"
                                           class="table table-striped  table-colored table-info dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th>No R.M</th>
                                            <th>Nama Pasien</th>
                                            <th>No Kamar</th>
                                            <th>Nama Kamar</th>
                                            <th>Tanggal Pesan</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Total Hari</th>
                                            <th>Total Biaya</th>
                                            <th>Status</th>
                                            <th>Cetak Resi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no = 1;
                                                
                                                    $query_mysql = mysql_query("SELECT pesan_kamar.kode_pesan,pasien.no_rm, pasien.nama_pasien, kamar.no_kamar, kamar.nama, pesan_kamar.tgl_keluar, pesan_kamar.tgl_pesan, pesan_kamar.total_hari, pesan_kamar.total_biaya, pesan_kamar.status FROM pesan_kamar
                                                JOIN pasien ON pesan_kamar.no_rm=pasien.no_rm
                                                JOIN kamar ON pesan_kamar.no_kamar=kamar.no_kamar WHERE pesan_kamar.status='$status_pesan' AND pesan_kamar.no_kamar='$no_kamar' ORDER BY `pesan_kamar`.`tgl_keluar` DESC")or die(mysql_error());
                                                    
                                              
                                                
                                                while($data = mysql_fetch_array($query_mysql)){
                                                    ?> 
                                        <tr>
                                            <td><?php echo $data['no_rm']; ?></td>
                                            <td><?php echo $data['nama_pasien']; ?></td>
                                            <td><?php echo $data['no_kamar']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo dateBahasaIndo($data['tgl_pesan']); ?></td>
                                            <td><?php echo dateBahasaIndo($data['tgl_keluar']); ?></td>
                                            <td>
                                                <?php
                                                if ($data['total_hari']==NULL) {
                                                    echo "";
                                                } else {
                                                    echo $data['total_hari']." Hari";
                                                }
                                                
                                                ?> 
                                            </td>
                                            <td><?php echo $data['total_biaya']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td>
                                                <a href="cetak_pesan_kamar.php?kode_pesan=<?php echo $data['kode_pesan']; ?>"class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i class="fa fa-print"></i> </a>
                                            </td>
                                           
                                            
                                        </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
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

        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="../plugins/datatables/dataTables.colVis.js"></script>
        <script src="../plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>

    </body>
</html>
<?php
}else{
    session_destroy();
    header('Location:..\index.php?status=Silahkan Login');
}
?>