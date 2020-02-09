
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <!-- App title -->
        <title>Login - SIZAKAT</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="bg-transparent" OnLoad="document.login.username.focus();">

        <!-- HOME -->
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box img-responsive" >
                                    <h2 class="text-uppercase">
                                        <a href="index.php" class="text-success">
                                            <span><img src="assets/images/basnaz.jpg" alt="" width="100%" height="100%"></span>
                                        </a>
                                    </h2>
                                </div>
                                <div class="account-content">
                                    <div id="loading" style="text-align: center"></div>
                                    <form name="form" id="loginF" method="post" action="" class="form-horizontal">
                                        <fieldset>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                
                                               <input type="text"  name="username" id="username" value="" class="form-control"  placeholder="Username" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                            <input type="password" name="passlogin"  value="" id="passlogin" class="form-control" placeholder="Password" />
                                            </div>
                                        </div>
                                    </fieldset>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox">
                                                    <label for="checkbox-signup">
                                                        Ingat Saya
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                      

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-success waves-effect waves-light" >Log In</button>
                                                <a href="../index.php" type="button" class="btn btn-danger btn-bordered waves-effect w-md waves-light">Beranda</a>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        
<script src="assets/js/jquery.2.1.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>

<?php include "config/fungsi_login.php" ?>
    </body>

</html>