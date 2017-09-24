<?php $this->load->view('main/V_Head');?>

<div class="container">
<div id="HTMLtoPDF">
    <center><h3><B>LAPORAN DATA SERVIS PERIODE</B></h3></center><br><br>
    <!-- <a href="#" onclick="HTMLtoPDF()">Export PDF</a> -->
   <!--  <form class="nav navbar-nav navbar-right" action="<?php echo site_url('user/C_User/cekservis');?>" method='post'>
                    <input type="text" name="pencarian" placeholder="Input Nota Enter">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br> 

    </form> -->
                                   <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>NOTA</th>
                                                <th>Tanggal Diterima</th>
                                                <th>Tanggal Diambil</th>
                                                <th>Nama Teknisi</th>
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
                                                <td><?php echo $r->teknisi_nama ?></td>
                                                <td><?php echo $r->biaya ?></td>
                                            </tr>
                                        <?php $no++; $biaya=$biaya+$r->biaya; } ?>
                                            <tr>
                                                <td colspan="5">Total</td>
                                                <td><?php echo $biaya;?></td>
                                            </tr>
                                        </tbody>
                                  </table>

</div>


</table>
</div>

<?php $this->load->view('main/V_Script');?>

<script>window.print();</script>