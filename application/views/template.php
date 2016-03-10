<!doctype html>
    <html>
        <head>
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            <!-- bootstrap 3.0.2 -->
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
            <!-- font Awesome -->
            <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
            <!-- Ionicons -->
            <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
            <!-- daterange picker -->
            <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" />
            <!-- iCheck for checkboxes and radio inputs -->
            <link href="<?php echo base_url('assets/css/iCheck/all.css');?>" rel="stylesheet" type="text/css" />
            <!-- Bootstrap Color Picker -->
            <link href="<?php echo base_url('assets/css/colorpicker/bootstrap-colorpicker.min.css');?>" rel="stylesheet"/>
            <!-- Bootstrap time Picker -->
            <link href="<?php echo base_url('assets/css/timepicker/bootstrap-timepicker.min.css');?>" rel="stylesheet"/>
            <!-- Theme style -->
            <link href="<?php echo base_url('assets/css/AdminLTE.css');?>" rel="stylesheet" type="text/css" />
            <!-- jQuery 2.0.2 -->
            <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
            <!-- Bootstrap -->
            <script src="<?php echo base_url('assets/js/bootstrap.min.js" type="text/javascript');?>"></script>
            <script src="<?php echo base_url('assets/js/jquery.validate.js');?>"></script>
        </head>
        <body>
             
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside>
                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                                

                                    <?php echo $_content;?>
                               
                        </div>
                    </div>
                </section>
            </aside>
        </div>
        
        <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Konfirmasi</h4>
                  </div>
                  <div class="modal-body">
                        <input type="hidden" name="idhapus" id="idhapus">
                        <input type="hidden" name="idhapus2" id="idhapus2">
                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        
        <!-- Core Scripts - Include with every page -->
        <!-- jQuery 2.0.2 -->
        <!-- InputMask -->
        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.date.extensions.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.extensions.js');?>" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <script src="<?php echo base_url('assets/js/plugins/colorpicker/bootstrap-colorpicker.min.js');?>" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="<?php echo base_url('assets/js/plugins/timepicker/bootstrap-timepicker.min.js');?>" type="text/javascript"></script>
        <!-- AdminLTE App -->
         </body>
    </html>