<div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php" class="logo"><span>SI<span>ZAKAT</span></span><i class="mdi mdi-cube"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="hidden-xs">
                                
                            </li>
                            <li class="hidden-xs">
                            </li>
                            <li class="dropdown hidden-xs">
                             
                               
                            </li>
                        </ul>
                  

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-primary"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Notifikasi</h5>
                                    </li>
                                    <li>
                                        <a href="code/update_notif.php" class="user-list-item">
                                            <div class="icon bg-info">
                                                <i class="mdi mdi- mdi mdi-seat-recline-extra"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Pesan Kamar</span>
                                                <span class="time"></span>
                                            </div>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="code/update_status.php" class="user-list-item">
                                            <div class="icon bg-success">
                                                <i class="mdi mdi-seat-individual-suite"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Registrasi</span>
                                                <span class="time"></span>
                                            </div>
                                        </a>
                                    </li>
                                  
                                </ul>
                            </li>

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/logo1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, <?php echo $_SESSION['username'];?> </h5>
                                    </li>
                                   
                                    <li><a href="setting_akun_admin.php"><i class="ti-lock m-r-5"></i>Setting Akun</a></li>
                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->