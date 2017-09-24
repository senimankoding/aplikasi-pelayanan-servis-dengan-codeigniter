<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('pm/Vm_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br><h2 class="page-header">Welcome <i><?php echo $this->session->userdata('pm_user') ?></i></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <h3></h3>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                  
                                    <div class="huge"></div>
                                 
                                    <div>Profil</div>
                                </div>
                            </div>
                        </div>
                       <a href="<?php echo site_url('pm/C_Pm/update_pm/'.$this->session->userdata('pm_id').'') ;?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   
                                    <div class="huge"></div>
                                    
                                    <div>Data Servis</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('pm/C_Pm/read_servis');?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> 
                  <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-log-out fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   <!--  <?php foreach($count_admin AS $admin){ ?>
                                    <div class="huge"><?=$admin->admin_count;?></div>
                                    <?php } ?>
                                    <div>Admin Registered</div> -->
                                    <div class="huge"></div>
                                    <div>Logout</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('C_Main/logout');?>" onclick="return confirm('Apakah anda yakin keluar aplikasi ?')">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> 
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php $this->load->view('main/V_Script');?>