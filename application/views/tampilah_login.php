
<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/zircos_1.6/menu_2_md/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2017 23:55:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo_sf.jpg">
        <!-- App title -->
        <title>DISPERINDAG</title> 

        <!-- App css -->
        <link href="assets/menu_2_md/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/menu_2_md/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/menu_2_md/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/menu_2_md/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/menu_2_md/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/menu_2_md/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/menu_2_md/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/menu_2_md/assets/js/modernizr.min.js"></script>
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-83057131-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase" style="color: #FFFFFF">
                                        DISPERINDAG
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form method="post" role="form" class="form-horizontal" action="<?php echo base_url(); ?>index.php/auth/getlogin">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" id="username" name="username" placeholder="Username">
                                                <?php echo form_error('username'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" required="" id="password" name="password" placeholder="Password">
                                                <?php echo form_error('password'); ?>
                                            </div>
                                        </div>


                                        <div class="form-group text-center m-t-30">

                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Log In</button>
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
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/menu_2_md/assets/js/jquery.min.js"></script>
        <script src="assets/menu_2_md/assets/js/bootstrap.min.js"></script>
        <script src="assets/menu_2_md/assets/js/detect.js"></script>
        <script src="assets/menu_2_md/assets/js/fastclick.js"></script>
        <script src="assets/menu_2_md/assets/js/jquery.blockUI.js"></script>
        <script src="assets/menu_2_md/assets/js/waves.js"></script>
        <script src="assets/menu_2_md/assets/js/jquery.slimscroll.js"></script>
        <script src="assets/menu_2_md/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/menu_2_md/assets/js/jquery.core.js"></script>
        <script src="assets/menu_2_md/assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/zircos_1.6/menu_2_md/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2017 23:55:11 GMT -->
</html>