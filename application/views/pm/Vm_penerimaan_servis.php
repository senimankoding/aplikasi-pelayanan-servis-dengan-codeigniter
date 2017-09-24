<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('pm/Vm_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Transaksi Penerimaan Barang</h1></center>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->                                
                                <div class="col-lg-12">
                                   <?php echo form_open("pm/C_Pm/create_transaksi"); ?>
                                       <input type="hidden" name="nota" type="text" value="<?php echo $nota; ?>" readonly>
                                       <input type="text" name="status_servis" type="text" value="PROSES" readonly>
                                       <input type="hidden" name="tglditerima" type="text" value="<?php echo "",date("m/d/Y"); ?>" readonly>
                                        <div class="form-group">
                                            <label class="control-label">Nama Barang</label>
                                            <input type="text" name="nmbarang"  class="form-control" required >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Nama Pemilik</label>
                                            <input type="text" name="nmpemilik" va class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">No. Tlpn</label>
                                            <input type="text" name="tlpn"  class="form-control" required >
                                        </div>
                                        
                                       
                                        
                                       <!--  <div class="form-group" align="right">
                                        <a href="<?php echo site_url('admin/C_Admin/read_komplain');?>" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Back
                                         </a>
                                        </div> -->
                                    
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
                                 <!--    <?php
                                          $dataservis = $this->db->get('dataservis');
                                          foreach ($dataservis->result() as $value){
                                          
                                          ?>
                                          <option value="<?php echo $value->nota;?>"><?php echo $value->nota,2;?></option>
                                          <?php }?>  
                                         -->
                                        <div class="form-group">
                                            <label class="control-label">Kerusakan</label>
                                            <input type="text" name="kerusakan"  class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Kelengkapan</label>
                                            <input type="text" name="kelengkapan"  class="form-control" required >
                                        </div>

                                       <!--  <div class="form-group">
                                            <label class="control-label">Tanggal Diterima</label>
                                            <input type="text" name="fullname"  class="form-control" required >
                                        </div> -->

                                        <div class="form-group">
                                            <label class="control-label">ID Penerima</label>
                                            <select name="pm_id" class="form-control"  placeholder="pm_id" required >
                                       
                                                <option value="">-pilih-</option>
                                          <?php
                                          $pramuniaga = $this->db->get('pramuniaga');
                                          foreach ($pramuniaga->result() as $value){
                                          
                                          ?>
                                          <option value="<?php echo $value->pm_id;?>">ID: <?php echo $value->pm_id;?>/ Nama <?php echo $value->pm_nama;?></option>
                                          <?php }?> 
                                          </select>
                                        </div>
                                        
                                        <div class="form-group" align="right">
                                            <input type="reset" values="reset" class="btn btn-danger">
                                            <input type="submit" values="submit" class="btn btn-success" >
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

            <a href="<?php echo site_url('pm/C_Pm/penerimaan_servis');?>" target="_blank">Penerimaan Servis</a>
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
                                <th>Pemilik</th>
                                <th>Alamat</th>
                                <th>No.Tlpn</th>
                                <th>Kerusakan</th>
                                <th>Kelengkapan</th>
                                <th>Tgl.Trima</th>
                                <th>ID Penerima</th>
                                <th>Action</th>
                              </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($data_servis AS $servis){ ?>
                                    <tr>
                                        <td><?="$no.";?></td>
                                        <td><?=$servis->nota;?></td>
                                        <td><?=$servis->nmbarang;?></td>
                                        <td><?=$servis->nmpemilik;?></td>
                                        <td><?=$servis->alamat;?></td>
                                        <td><?=$servis->tlpn;?></td>
                                        <td><?=$servis->kerusakan;?></td>
                                        <td><?=$servis->kelengkapan;?></td>
                                        <td><?=$servis->tglditerima;?></td>
                                        <td><?=$servis->pm_id;?></td>
                                        <td>
                                            <a href="<?=site_url('pm/C_Pm/print_servis/'.$servis->nota);?>" target="_blank"><i class="glyphicon glyphicon-print" style="color: green;" title="Print"></i></a>
                                            &nbsp;|&nbsp;
                                            <a href="<?=site_url('pm/C_Pm/delete_servis/'.$servis->nota);?>" onClick="return doconfirm();"><i class="fa fa-trash fa-fw" style="color: red;" title="Delete"></i></a>
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