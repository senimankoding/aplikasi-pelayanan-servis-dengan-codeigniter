<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('pm/Vm_Navbar');?>

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
                                   
                                       <?php echo form_open('teknisi/C_Teknisi/send'); ?>
                                        <div class="form-group">
                                            <label class="control-label">Tlpn</label>
                                            <input type="text" name="tlpn"  class="form-control" required >
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Pesan</label>
                                            <input type="text" name="pesan"  class="form-control" required >
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success btn-sm">Kirim Pesan</button>
                                        
                                        
                                       
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
                
            
                    
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->






<?php $this->load->view('main/V_Script');?>