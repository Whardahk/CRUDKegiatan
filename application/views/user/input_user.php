
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
                                        <a href="#">User</a>
                                    </li>
                                    
                                    <li class="active">
                                        Input User
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Input User</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-box">

                                    <div class="p-20">
                                        <form method="post" role="form" data-parsley-validate novalidate action="<?php echo base_url(); ?>index.php/user/save/" onSubmit="return cekform()">
                                            <div class="form-group row" hidden="">
                                                <label for="kode_jabatan" class="col-sm-4 form-control-label">Index<span class="text-danger">*</span></label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" placeholder="Kode Akun"
                                                           id="id" name="id" value="<?php echo $id; ?>">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group row">
                                                <label for="nama_jabatan" class="col-sm-3 form-control-label">Username<span class="text-danger">*</span></label>
                                                <div class="col-sm-9">
                                                     <input type="text" class="form-control" placeholder="Username" required
                                                           id="username" name="username" value="<?php echo $username; ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hori-pass1" class="col-sm-3 form-control-label">Password<span class="text-danger">*</span></label>
                                                <div class="col-sm-9">
                                                    <input id="password" type="password" placeholder="Password" required
                                                           class="form-control" name="password" value="<?php echo $password; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Level</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="level" id="level" required="">
                                                        <option value="-" >-- Level --</option>
                                                        <option value="1">Super Admin</option>
                                                        <option value="2">Bagian/User</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-8 col-sm-offset-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Save
                                                    </button>
                                                    <button type="reset"
                                                            class="btn btn-default waves-effect m-l-5">
                                                        Reset
                                                    </button>
                                                    <a href="<?php echo base_url(); ?>index.php/user" class="btn btn-custom waves-effect m-l-5">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                            </div>
                            </div>
                            <!-- end row -->
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