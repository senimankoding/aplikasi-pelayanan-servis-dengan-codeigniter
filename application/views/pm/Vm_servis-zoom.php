<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('pm/Vm_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Data Servis</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->                                
                                <div class="col-lg-12">
                                    <?php echo form_open(""); ?>
                                        <!-- <input type="hidden" name="teknisi_id" value="<?=$data_komplain->komplain_id;?>" required> -->
                                        <div class="form-group">
                                            <label class="control-label">Nota</label>
                                            <input type="text" name="fullname" value="<?=$data_servis->nota;?>" class="form-control" required readonly>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Nama Barang</label>
                                            <input type="text" name="username" value="<?=$data_servis->nmbarang;?>" class="form-control" required readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Nama Pemilik</label>
                                            <input type="text" name="address" value="<?=$data_servis->nmpemilik;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <input type="text" name="tlpn" value="<?=$data_servis->alamat;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">No. Tlpn</label>
                                            <input type="text" name="username" value="<?=$data_servis->tlpn;?>" class="form-control" required readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Kerusakan</label>
                                            <input type="text" name="tlpn" value="<?=$data_servis->kerusakan;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Kelengkapan</label>
                                            <input type="text" name="username" value="<?=$data_servis->kelengkapan;?>" class="form-control" required readonly>
                                        </div>
                                        
                                       <!--  <div class="form-group" align="right">
                                        <a href="<?php echo site_url('admin/C_Admin/read_komplain');?>" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Back
                                         </a>
                                        </div> -->
                                    <?php echo form_close(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->                                
                                <div class="col-lg-12">
                                    <?php echo form_open(""); ?>
                                        <!-- <input type="hidden" name="teknisi_id" value="<?=$data_komplain->komplain_id;?>" required> -->
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Diterima</label>
                                            <input type="text" name="fullname" value="<?=$data_servis->tglditerima;?>" class="form-control" required readonly>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">ID Penerima</label>
                                            <input type="text" name="username" value="<?=$data_servis->pm_id;?>" class="form-control" required readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Teknisi</label>
                                            <input type="text" name="address" value="<?=$data_servis->teknisi_id;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Kondisi Barang</label>
                                            <input type="text" name="tlpn" value="<?=$data_servis->kondisibrg;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Ambil</label>
                                            <input type="text" name="username" value="<?=$data_servis->tglambil;?>" class="form-control" required readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">ID Penyerah</label>
                                            <input type="text" name="tlpn" value="<?=$data_servis->penyerah;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Biaya</label>
                                            <input type="text" name="username" value="<?=$data_servis->biaya;?>" class="form-control" required readonly>
                                        </div>
                                        
                                        <div class="form-group" align="right">
                                            <a href="<?php echo site_url('pm/C_Pm/read_servis');?>" class="btn btn-primary"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
                                        </div>
                                    <?php echo form_close(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

            
                    
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


<?php $this->load->view('main/V_Script');?>