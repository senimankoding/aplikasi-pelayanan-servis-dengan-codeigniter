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
                            <a href="<?php echo site_url('pm/C_Pm');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('pm/C_Pm/update_pm/'.$this->session->userdata('pm_id').'') ;?>"><i class="fa fa-user fa-fw"></i> Profile</a>
         <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="<?php echo site_url('pm/C_Pm/read_servis');?>"><i class="glyphicon glyphicon-list-alt"></i> Data Servis</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-transfer"></i> Transaksi Servis<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('pm/C_Pm/penerimaan_barang');?>">Penerimaan Barang</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('pm/C_Pm/pengembalian_barang');?>">Pengembalian Barang</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('C_Main/logout');?>" onclick="return confirm('Apakah anda yakin keluar aplikasi ?')"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav><br>