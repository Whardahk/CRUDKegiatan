
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
                                        <a href="#">Kegiatan Publik</a>
                                    </li>
                                    
                                    <li class="active">
                                        Input Kegiatan Publik
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Input Kegiatan Publik</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-box">

                                    <div class="p-20">
                                        <form method="post" role="form" data-parsley-validate novalidate action="<?php echo base_url(); ?>index.php/kegiatanadmin/save/" onSubmit="return cekform()">
                                            <div class="form-group row" hidden="">
                                                <label for="kode_jabatan" class="col-sm-2 form-control-label">Index<span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Kode Akun"
                                                           id="id" name="id" value="<?php echo $id; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                            <label class="col-sm-2 form-control-label">Program</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="program" class="form-control" required="true"> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kegiatan" class="form-control" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Target Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="target_kegiatan" class="form-control" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Anggaran</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="anggaran" class="form-control" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Sub Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="sub_kegiatan" class="form-control" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Target Volume Sub</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="target_volume_sub" class="form-control" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Lokasi Sub Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="lokasi_sub_kegiatan" class="form-control" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Anggaran Sub Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="anggaran_sub_kegiatan" class="form-control" required="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 form-control-label">Realisasi Volume Sub</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="realisasi_volume_sub" class="form-control" required="true">
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
                                                    <a href="<?php echo base_url(); ?>index.php/pengunjung" class="btn btn-custom waves-effect m-l-5">Cancel</a>
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