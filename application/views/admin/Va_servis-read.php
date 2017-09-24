<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('admin/Va_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Halaman Data Servis Admin</h1></center>
                </div>
            </div>

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
                                <th><font size="1">NO.</th>
                                <th><font size="1">NOTA</th>
                                <th><font size="1">Barang</th>
                                <th><font size="1">Pemilik</th>
                                <th><font size="1">Alamat</th>
                                <th><font size="1">No.Tlpn</th>
                                <th><font size="1">Kerusakan</th>
                                <th><font size="1">Kelengkapan</th>
                                <th><font size="1">Tgl.Trima</th>
                                <th><font size="1">ID Penerima</th>
                                <th><font size="1">ID Teknisi</th>
                                <th><font size="1">Kondisi</th>
                                <th><font size="1">Tgl.Ambil</th>
                                <th><font size="1">ID Penyerah</th>
                                <th><font size="1">Biaya</th>
                                <th><font size="1">Actions</th>
                              </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($data_servis AS $servis){ ?>
                                    <tr>
                                        <td><font size="1"><?="$no.";?></td>
                                        <td><font size="1"><?=$servis->nota;?></td>
                                        <td><font size="1"><?=$servis->nmbarang;?></td>
                                        <td><font size="1"><?=$servis->nmpemilik;?></td>
                                        <td><font size="1"><?=$servis->alamat;?></td>
                                        <td><font size="1"><?=$servis->tlpn;?></td>
                                        <td><font size="1"><?=$servis->kerusakan;?></td>
                                        <td><font size="1"><?=$servis->kelengkapan;?></td>
                                        <td><font size="1"><?=$servis->tglditerima;?></td>
                                        <td><font size="1"><?=$servis->pm_id;?></td>
                                        <td><font size="1"><?=$servis->teknisi_id;?></td>
                                        <td><font size="1"><?=$servis->kondisibrg;?></td>
                                        <td><font size="1"><?=$servis->tglambil;?></td>
                                        <td><font size="1"><?=$servis->penyerah;?></td>
                                        <td><font size="1"><?=$servis->biaya;?></td>
                                        <td>
                                            <a href="<?=site_url('admin/C_Admin/zoom_servis/'.$servis->nota);?>"><i class="glyphicon glyphicon-zoom-in" style="color: green;" title="Zoom"></i></a>
                                            &nbsp;|&nbsp;
                                            <a href="<?=site_url('admin/C_Admin/delete_servis/'.$servis->nota);?>" onClick="return doconfirm();"><i class="fa fa-trash fa-fw" style="color: red;" title="Delete"></i></a>
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