        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--Zircos-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        DISPERINDAG

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras navbar-right" >
                        <ul class="nav navbar-nav">
                            <?php
                                $username = $this->session->userdata('username');

                                $query = $this->db->query("SELECT level FROM tb_users WHERE username = '$username'");
                                    $row1 = $query->row();
                                
                                        if (isset($row1)){
                                                $level= $row1->level;
                                        }
                            ?>
                        </ul> 

                        <ul class="nav navbar-nav navbar-right pull-right">

                            

                            <li class="dropdown navbar-c-items">
                                <a href="#" class="Dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url(); ?>assets/img/user.ico" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-Dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="text-center">
                                        <h5>Hi, <?php echo $username; ?></h5>
                                    </li>

                                    <li><a href="<?php echo base_url(); ?>index.php/Auth/logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>

                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li>
                                <a href="<?php echo base_url(); ?>index.php/Dashboard"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                            </li>
                            <?php 
                                if($level == '1'){
                            ?>
                                
                                <li class="has-submenu">
                                    <a href="#"><i class="glyphicon glyphicon-book"></i>Kegiatan Publik</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo base_url(); ?>index.php/KegiatanAdmin">2020</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/User"><i class="mdi  mdi mdi-account-multiple"></i>User</a>
                                </li>
                            <?php }?>
                            <?php 
                                if($level == '2'){
                            ?>
                                <li class="has-submenu">
                                    <a href="#"><i class="glyphicon glyphicon-book"></i>Kegiatan Publik</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo base_url(); ?>index.php/Kegiatan">2020</a></li>
                                    </ul>
                                </li>
                            <?php }?>
                             

                            
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
