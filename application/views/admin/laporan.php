<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('admin/Va_Navbar');?>

<div id="page-wrapper">

                    <div class="col-md-12">
                        <center><h1 class="page-header">LAPORAN PERIODE</h1></center>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('admin/laporan/laporan', array('class'=>'form-inline')); ?>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Tanggal</label>
                                        <input type="date" name="tanggal1" class="form-control" placeholder="Tanggal Awal">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2"> - </label>
                                        <input type="date" name="tanggal2" class="form-control" placeholder="Tanggal Akhir">
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit" target="_blank">Tampilkan</button>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>

        <!--  <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>NOTA</th>
                                                <th>Tanggal Diterima</th>
                                                <th>Tanggal Diambil</th>
                                                <th>Total Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $biaya=0; foreach ($record->result() as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nota ?></td>
                                                <td><?php echo $r->tglditerima ?></td>
                                                <td><?php echo $r->tglambil ?></td>
                                                <td><?php echo $r->biaya ?></td>
                                            </tr>
                                        <?php $no++; $biaya=$biaya+$r->biaya; } ?>
                                            <tr>
                                                <td colspan="4">Total</td>
                                                <td><?php echo $biaya;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                 </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div><!-- <button onClick="window.print();"><i class="glyphicon glyphicon-print"  title="Print"></i></button>  -->
                    </div> -->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php $this->load->view('main/V_Script');?>
