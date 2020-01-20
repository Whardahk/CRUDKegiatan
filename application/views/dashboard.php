
<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/zircos_1.6/menu_2_md/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2017 23:55:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">


<!-- Head-->
    <?php $this->load->view('template/head'); ?>

    </head>


    <body>
        <!-- Navigation Bar-->
            <?php $this->load->view('template/header'); ?>
        
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li>
                                        <a href="#">Zircos</a>
                                    </li>
                                    
                                    <li class="active">
                                        Admin
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <div class="row">
                                    <div class="col-sm-12 m-t-20">
                                        <blockquote class="blockquote">
                                            
                                            <p class="m-b-0">Welcome <b><?php echo strtoupper($this->session->userdata('username')); ?></b> in Disperindag Website</p>          
                                        </blockquote>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <!-- Footer -->
                    <?php $this->load->view('template/footer'); ?>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- jQuery  -->
            <?php $this->load->view('template/foot'); ?>
    </body>

<!-- Mirrored from coderthemes.com/zircos_1.6/menu_2_md/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2017 23:55:11 GMT -->
</html>