<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('user/Vm_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br><center><h1 class="page-header">Data Servis Nota <?php echo $this->session->userdata('nota') ?></h1></center>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User List
                        </div>

        <!-- <br><form class="nav navbar-nav navbar-right" action="<?php echo site_url('user/C_User/cekservis');?>" method='post'>
                    <input type="text" name="pencarian" placeholder="Input Nota Enter">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br> -->

       </form>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        <table  class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                    <th>Nota</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Barang</th>
                    <th>Kondisi</th>
                    <th>Biaya</th>
                    <th>Status</th>       
            </tr>
            </thead>

             <tbody>
                
                
                <tr>
                    <td><?=$data_user->nota;?></td>
                    <td><?=$data_user->nmpemilik;?></td>
                    <td><?=$data_user->nmbarang;?></td>
                    <td><?=$data_user->kondisibrg;?></td>
                    <td><?=$data_user->biaya;?></td> 
                    <td><?=$data_user->status_servis;?></td>
                </tr>
               
            </tbody>
            
            </table>

                            <!-- <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Member Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Birth Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($data_member AS $member){ ?>
                                    <tr>
                                        <td><?="$no.";?></td>
                                        <td><?=$member->member_user;?></td>
                                        <td><?=$member->member_nama;?></td>
                                        <td><?=$member->member_alamat;?></td>
                                        <td><?=$member->member_ttl;?></td>
                                        <td><?=$member->member_email;?></td>
                                    </tr>
                                    <?php $no++; } ?>
                                </tbody>
                            </table> -->
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php $this->load->view('main/V_Script');?>