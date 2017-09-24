<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('teknisi/Vt_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Transaksi Pemberitahuan Servis</h1></center>
                </div>
            </div>

           <!--  <a href="<?=site_url('teknisi/C_Teknisi/sms/');?>"><i class="glyphicon glyphicon-envelope"  title="SMS"></i> Pesan Baru</a> -->
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
            <br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Servis
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                     <tr>
                                <th>NO.</th>
                                <th>NOTA</th>
                                <th>Barang</th> 
                                <th>Kerusakan</th>
                                <th>Tgl.Trima</th>
                                <th>ID Penerima</th>
                                <th>Kondisi</th>
                                <th>Biaya</th>
                               
                                <th>ID Teknisi</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($data_servis AS $servis){ ?>
                                    <tr>
                                        <td><?="$no.";?></td>
                                        <td><?=$servis->nota;?></td>
                                        <td><?=$servis->nmbarang;?></td>
                                        <td><?=$servis->kerusakan;?></td>
                                        <td><?=$servis->tglditerima;?></td>
                                        <td><?=$servis->pm_id;?></td>
                                        <td><?=$servis->kondisibrg;?></td>
                                        <td><?=$servis->biaya;?></td>
                                        <td><?=$servis->teknisi_id;?></td>
                                        <td><?=$servis->status_servis;?></td>
                                        
                                        <td>
                                            <a href="<?=site_url('teknisi/C_Teknisi/update_pengembalian/'.$servis->nota);?>"><i class="fa fa-edit fa-fw"  title="Edit"></i></a>
                                            <!-- &nbsp;|&nbsp;
                                            <a href="<?=site_url('pm/C_Pm/print_pengembalian/'.$servis->nota);?>" target="_blank"><i class="glyphicon glyphicon-print" style="color: green;" title="Print"></i></a> -->
                                        </td>
                                    </tr>
                                    <?php $no++; } ?>
                                </tbody>
                            </table>
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