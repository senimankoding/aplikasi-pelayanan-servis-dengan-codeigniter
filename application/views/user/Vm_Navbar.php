        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('user/C_User');?>">Users Management System</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo site_url('user/C_User');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo site_url('user/C_User/update_user/'.$this->session->userdata('user_id').'') ;?>"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>  -->
                        <li>
                            <a href="<?php echo base_url ('index.php/user/C_User/nota_user/'.md5($this->session->userdata ['nota']).'') ;?>"><i class="glyphicon glyphicon-open-file"></i> Cek Servis</a>
                        </li>  
                        <!-- <li>
                            <a href="<?php echo site_url('user/C_User/cekservis');?>"><i class="glyphicon glyphicon-open-file"></i> Cek Servis</a>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url ('index.php/user/C_User/komplain/'.md5($this->session->userdata ['nota']).'') ;?>"><i class="glyphicon glyphicon-send"></i> Komplain Servis</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('C_Main/logout');?>" onclick="return confirm('Apakah anda yakin keluar aplikasi ?')"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>