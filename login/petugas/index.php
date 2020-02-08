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
        <title>Dashboard - RSIA</title>

        <!-- date range picker -->
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
        <script src="Chart.js/Chart.js"></script>
        <script src="Chart.js/highcharts.js"></script>

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
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Dashboard</a>
                                        </li>
                                       
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">

                            <?php
                             $sql =mysql_query("SELECT * FROM pasien");
                            $total = mysql_num_rows($sql)
                           
                            ?>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Pasien</p>
                                        <h2 class="text-white"><span data-plugin="counterup"><?php echo $total; ?></span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        <p class="m-0"><b>Total Pasien</b></p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <?php
                             $sql2 =mysql_query("SELECT * FROM dokter");
                            $total_dokter = mysql_num_rows($sql2)
                           
                            ?>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Dokter</p>
                                        <h2 class="text-white"><span data-plugin="counterup"><?php echo $total_dokter; ?></span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        <p class="m-0"><b>Total Dokter</b></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <?php
                                $sql3 =mysql_query("SELECT * FROM petugas");
                                $total_petugas = mysql_num_rows($sql3)
                            ?>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-danger">
                                    <i class="mdi mdi-account-convert widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Petugas</p>
                                        <h2 class="text-white"><span data-plugin="counterup"><?php echo $total_petugas; ?></span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        <p class="m-0"><b>Total Petugas</b></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <?php
                                $sql4 =mysql_query("SELECT * FROM perawat");
                                $total_perawat = mysql_num_rows($sql4)
                            ?>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-account-convert widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Perawat</p>
                                        <h2 class="text-white"><span data-plugin="counterup"><?php echo $total_perawat; ?></span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        <p class="m-0"><b>Total Perawat</b></p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                            <hr>
                            <h3>Statistik Pengguna</h3>
                                <div class="row">
                                    <div style="width: 600px;margin: 0px auto;">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>

                                <h3>Statistik Rekam Medis</h3>

                                <div class="row">
                                    <div style="width: 600px;margin: 0px auto;">
                                        <canvas id="rekam_medis"></canvas>
                                    </div>
                                </div>

                                <h3>Statistik Pesan Kamar</h3>

                                <div class="row">
                                    <div style="width: 600px;margin: 0px auto;">
                                        <canvas id="pesan_kamar"></canvas>
                                    </div>
                                </div>

                                <div id="chart-container">
                                    <canvas id="graphCanvas"></canvas>
                                </div>

                            <script>
                    var ctx = document.getElementById("myChart").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Pasien", "Dokter", "Petugas", "Perawat"],
                            datasets: [{
                                label: '',
                                data: [
                               <?php
                                $jumlah_teknik = mysql_query("SELECT * FROM pasien")or die(mysql_error());
                                echo mysql_num_rows($jumlah_teknik);
                                ?>, 
                                <?php 
                                $jumlah_tip = mysql_query("SELECT * FROM dokter")or die(mysql_error());
                                echo mysql_num_rows($jumlah_tip);
                                ?>, 
                                <?php 
                                $jumlah_mo = mysql_query("SELECT * FROM petugas")or die(mysql_error());
                                echo mysql_num_rows($jumlah_mo);
                                ?>, 
                                <?php 
                                $jumlah_ak = mysql_query("SELECT * FROM perawat")or die(mysql_error());
                                echo mysql_num_rows($jumlah_ak);
                            
                                ?>
                                ],
                                backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                                ],
                                borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>
                <script>
                    var ctx = document.getElementById("pesan_kamar").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Dipesan", "Dibatalkan"],
                            datasets: [{
                                label: '',
                                data: [
                               <?php
                        
                          
                                $jumlah_1 = mysql_query("SELECT * FROM pesan_kamar WHERE status='Dipesan'")or die(mysql_error());
                                echo mysql_num_rows($jumlah_1);
                                ?>, 
                                <?php 
                                $jumlah_2 = mysql_query("SELECT * FROM pesan_kamar WHERE status='Dibatalkan'")or die(mysql_error());
                                echo mysql_num_rows($jumlah_ak);
                            
                                ?>
                                ],
                                backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                                ],
                                borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>

                <script>
                    var ctx = document.getElementById("rekam_medis").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Sedang Dipinjam", "Sudah Dikembalikan"],
                            datasets: [{
                                label: '',
                                data: [
                               <?php
                        
                          
                                $jumlah_1 = mysql_query("SELECT * FROM rekam_medis WHERE status='Sedang Dipinjam'")or die(mysql_error());
                                echo mysql_num_rows($jumlah_1);
                                ?>, 
                                <?php 
                                $jumlah_2 = mysql_query("SELECT * FROM rekam_medis WHERE status='Sudah Dikembalikan'")or die(mysql_error());
                                echo mysql_num_rows($jumlah_ak);
                            
                                ?>
                                ],
                                backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                                ],
                                borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>



                <script>
        $(document).ready(function () {
            showGraph();
        });

        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var nama = [];
                    var remarks = [];

                    for (var i in data) {
                        nama.push(data[i].nama_poli);
                        remarks.push(data[i].kode_poli);
                    }

                    var chartdata = {
                        labels: nama,
                        datasets: [
                            {
                                label: 'Keterangan Data Poli',
                                backgroundColor: '#f049ff',
                                borderColor: '#eb46f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: remarks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");
                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>


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
        <script src="../assets/js/jquery.2.1.1.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Flot chart js -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard_2.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2016',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });
        </script>

    </body>
</html>
<?php
}else{
    session_destroy();
    header('Location:..\index.php?status=Silahkan Login');
}
?>