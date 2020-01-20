
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
                                        2020
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kegiatan Publik</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>List Kegiatan Publik 2020</b></h4>
                            <a href="<?php echo base_url(); ?>index.php/kegiatan/input_kegiatan" class="btn btn-danger btn-small">Tambah Kegiatan Publik</a> 
                            

                            <table id="datatable-keytable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Program</th>
                                    <th>Kegiatan</th>
                                    <th>Target Kegiatan</th>
                                    <th>Anggaran</th>
                                    <th>Sub Kegiatan</th>
                                    <th>Target Volume Sub</th>
                                    <th>Lokasi Sub Kegiatan</th>
                                    <th>Anggaran Sub Kegiatan</th>
                                    <th>Realisasi Volume Sub</th>

                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>

                                 <?php
                                    $no=1;
                                    foreach($data->result() as $row){
                                  ?>

                                
                                <tr>
                                    <td><?php echo $no++; ?> </td>
                                    <td><?php echo $row->program; ?> </td>
                                    <td><?php echo $row->kegiatan; ?></td>
                                    <td><?php echo $row->target_kegiatan; ?></td>
                                    <td><?php echo $row->anggaran; ?></td>
                                    <td><?php echo $row->sub_kegiatan; ?></td>
                                    <td><?php echo $row->target_volume_sub; ?> </td>
                                    <td><?php echo $row->lokasi_sub_kegiatan; ?></td>
                                    <td><?php echo $row->anggaran_sub_kegiatan; ?></td>
                                    <td><?php echo $row->realisasi_volume_sub; ?></td>
                                    <td align="center">
                                        
                                        <a href="<?php echo base_url(); ?>index.php/kegiatan/delete/<?php echo $row->id ?>" type="button" class="btn btn-danger waves-effect w-xs waves-light m-b-5"> Delete </a>
                                    </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
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
<script type="text/javascript">
    $('#datatable-keytable').DataTable({keys: true});
</script>
</html>