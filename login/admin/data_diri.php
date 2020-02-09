						 <div class="user-details">
                            <div class="overlay"></div>
                            <div class="text-center">
                                <img src="assets/images/baznas_kalsel.jpg" alt="" class="thumb-md img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username'];?> <span class="mdi mdi-menu-down"></span></a>
                                </div>
                            </div>
                        </div>
						<div class="dropdown" id="setting-dropdown">
                            <ul class="dropdown-menu">
                                
                            
                                <li><a href="setting_akun_admin.php"><i class="mdi mdi-lock m-r-5"></i>Setting Akun</a></li>
                                <li><a href="logout.php"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                            </ul>
                        </div>