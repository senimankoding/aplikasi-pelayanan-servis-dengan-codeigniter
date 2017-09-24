        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin/C_Admin');?>">Dasboard</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo site_url('admin/C_Admin');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('admin/C_Admin/read_admin');?>">Admin</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/C_Admin/read_pm');?>">Pramuniaga</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/C_Admin/read_teknisi');?>">Teknisi</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/C_Admin/read_user');?>">User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/C_Admin/read_servis');?>"><i class="glyphicon glyphicon-list-alt"></i> Data Servis</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/C_Admin/read_komplain');?>"><i class="glyphicon glyphicon-envelope"></i> Komplain</a>
                        </li>
                         <li>
                            <a href="#"><i class="glyphicon glyphicon-file"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('admin/report');?>" target="_blank">Laporan Keseluruhan</a>
                                </li> 
                                <!-- <li>
                                    <a href="<?php echo site_url('admin/laporan');?>" target="_blank">Laporan Periode</a>
                                </li> -->
                                <li>
                                    <a href="<?php echo site_url('admin/laporan/laporan');?>" >Laporan Periode</a>
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