<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('admin/Va_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Halaman Data Komplain Servis</h1></center>
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
                            Komplain List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Barang</th>
                                        <th>No.Nota</th>
                                        <th>Nama Pemelik</th>
                                        <th>Teknisi</th>
                                        <th>Tgl.Komplain</th>
                                        <th>No.Tlpn</th>
                                        <th>Komplain</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($data_komplain AS $komplain){ ?>
                                    <tr>
                                        <td><?="$no.";?></td>
                                        <td><?=$komplain->namabrg;?></td>
                                        <td><?=$komplain->nota_lama;?></td>
                                        <td><?=$komplain->nama_pemilik;?></td>
                                        <td><?=$komplain->teknisi_id;?></td>
                                        <td><?=$komplain->tgl_komplain;?></td>
                                        <td><?=$komplain->no_tlpn;?></td>
                                        <td><?=$komplain->isikomplain;?></td>
                                        <td>
                                            <a href="<?=site_url('admin/C_Admin/delete_komplain/'.$komplain->komplain_id);?>" onClick="return doconfirm();"><i class="fa fa-trash fa-fw" style="color: red;"></i></a>
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