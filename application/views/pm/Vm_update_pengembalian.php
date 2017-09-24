<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('pm/Vm_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Proses Pengembalian Barang Servis</h2>
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
                                        <?php echo form_open("pm/C_Pm/pengembalian_servis_proses"); ?>
                                        <!-- <input type="hidden" name="teknisi_id" value="<?=$data_komplain->komplain_id;?>" required> -->
                                        <div class="form-group">
                                            <label class="control-label">Nota</label>
                                            <input type="text" name="nota" value="<?=$data_servis->nota;?>" class="form-control" required readonly>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Nama Barang</label>
                                            <input type="text" name="nmbarang" value="<?=$data_servis->nmbarang;?>" class="form-control" required readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Nama Pemilik</label>
                                            <input type="text" name="nmpemilik" value="<?=$data_servis->nmpemilik;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <input type="text" name="alamat" value="<?=$data_servis->alamat;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">No. Tlpn</label>
                                            <input type="text" name="tlpn" value="<?=$data_servis->tlpn;?>" class="form-control" required readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Kerusakan</label>
                                            <input type="text" name="kerusakan" value="<?=$data_servis->kerusakan;?>" class="form-control" required readonly>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label">Kelengkapan</label>
                                            <input type="text" name="kelengkapan" value="<?=$data_servis->kelengkapan;?>" class="form-control" required readonly>
                                        </div>
                                       
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
                                       
                                        
                                        <input type="hidden" name="nota" value="<?=$data_servis->nota;?>" required> 
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Diterima</label>
                                            <input type="text" name="tglditerima" value="<?=$data_servis->tglditerima;?>" class="form-control"  readonly>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">ID Penerima</label>
                                            <input type="text" name="pm_id" value="<?=$data_servis->pm_id;?>" class="form-control"  readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Teknisi</label>
                                            <input type="text" name="teknisi_id" value="<?=$data_servis->teknisi_id;?>" class="form-control"  readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Kondisi Barang</label>
                                            <input type="text" name="kondisibrg" value="<?=$data_servis->kondisibrg;?>" class="form-control"  readonly>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label">Biaya</label>
                                            <input type="text" name="biaya" value="<?=$data_servis->biaya;?>" class="form-control"  readonly>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Tanggal Expired Komplain</label>
                                            <input type="date" name="status_expired"  class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label"></label>
                                            <input type="hidden" name="penyerah" value=" <?php echo $this->session->userdata('pm_id') ?>" class="form-control"  readonly>
                                        </div>


                                      <!--   <div class="form-group">
                                            <label class="control-label">ID Penyerah</label>
                                             <select name="penyerah" class="form-control"  placeholder="pm_id" required >
                                       
                                                <option value="">-pilih-</option>
                                          <?php
                                          $pramuniaga = $this->db->get('pramuniaga');
                                          foreach ($pramuniaga->result() as $value){
                                          
                                          ?>
                                          <option value="<?php echo $value->pm_id;?>">ID: <?php echo $value->pm_id;?>/ Nama <?php echo $value->pm_nama;?></option>
                                          <?php }?> 
                                          </select>
                                        </div> -->
                                        

                                        <input type="hidden" name="status_servis" type="text" value="SUDAH DIAMBIL" readonly>
                                        <button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                            <i class="glyphicon glyphicon-print"></i>
                                            <span class="bigger-110">Print</span>
                                        </button>
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
