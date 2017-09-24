<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('teknisi/Vt_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h2 class="page-header">Update Kondisi Barang Servis</h2></center>
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
                                            <label class="control-label">Kelengkapan</label>
                                            <input type="text" name="username" value="<?=$data_servis->kelengkapan;?>" class="form-control" required readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Kerusakan</label>
                                            <input type="text" name="tlpn" value="<?=$data_servis->kerusakan;?>" class="form-control" required readonly>
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
                                        <?php echo form_open("teknisi/C_Teknisi/pengembalian_servis_proses"); ?>
                                        <input type="hidden" name="nota" value="<?=$data_servis->nota;?>" required> 
                                         
                                        <div class="form-group">
                                            <label class="control-label">No. Tlpn</label>
                                            <input type="text" name="tlpn" value="<?=$data_servis->tlpn;?>" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Diterima</label>
                                            <input type="text" name="fullname" value="<?=$data_servis->tglditerima;?>" class="form-control"  readonly>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">ID Penerima</label>
                                            <input type="text" name="username" value="<?=$data_servis->pm_id;?>" class="form-control"  readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Kondisi Barang</label>
                                            <input type="text" name="kondisibrg"  class="form-control" value="<?=$data_servis->kondisibrg;?>" required>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label">Biaya</label>
                                            <input type="text" name="biaya"  class="form-control" value="<?=$data_servis->biaya;?>" required>
                                        </div>
                                       <!--  
                                        <div class="form-group">
                                            <label class="control-label">ID Teknisi</label>
                                             <select name="teknisi_id" class="form-control"  placeholder="teknisi_id" required >
                                       
                                                <option value="">-pilih-</option>
                                          <?php
                                          $teknisi = $this->db->get('teknisi');
                                          foreach ($teknisi->result() as $value){
                                          
                                          ?>
                                          <option value="<?php echo $value->teknisi_id;?>">ID: <?php echo $value->teknisi_id;?>/ Nama <?php echo $value->teknisi_nama;?></option>
                                          <?php }?> 
                                          </select>
                                        </div> -->
                                        <input type="hidden" name="status_servis" type="text" value="BISA DIAMBIL" readonly>
                                      <!--   <div class="form-group">
                                            <label class="control-label">Status Servis</label>
                                            <input type="text" name="status_servis"  class="form-control" value="<?=$data_servis->status_servis;?>" required>
                                        </div> -->
                                        <input type="hidden" name="teknisi_id" value=" <?php echo $this->session->userdata('teknisi_id') ?>" class="form-control"  readonly>
                                        
                                        <div class="form-group" align="right">
                                        <button type="submit" name="submit" class="width-35  btn btn-sm btn-primary">
                                            <i class="glyphicon glyphicon-share-alt"></i>
                                            <span class="bigger-110">Kirim</span>
                                        </button> 
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