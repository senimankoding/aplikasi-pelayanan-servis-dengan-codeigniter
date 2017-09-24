<!-- silakan desain dengan menggunakan CSS -->
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Expand - IT Solution</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>tambah/css/tipe.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>tambah/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>tambah/css/bootstrap-theme.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet"> -->
</head>
<body>

<div class="container">
<div id="HTMLtoPDF">
    <center><h3>DATA SERVIS KESELURUHAN</h3></center><br>
    <a href="#" onclick="HTMLtoPDF()">Export PDF</a>
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>NOTA</th>
                                        <th>Barang</th>
                                        <!-- <th>Pemilik</th>
                                        <th>Kerusakan</th>
                                        <th>Kelengkapan</th> -->
                                        <th>Tgl.Trima</th>
                                        <!-- <th>ID Penerima</th>
                                        <th>ID Teknisi</th> -->
                                        <th>Kondisi</th>
                                        <th>Tgl.Ambil</th>
                                      <!--   <th>ID Penyerah</th> -->
                                        <th>Biaya</th>
                                       <!--  <th>Password</th> -->
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; $biaya=0; foreach($data->result() as $row){ ?>
                                    <tr>
                                         <td><?="$no.";?></td>
                                        <td><?=$row->nota;?></td>
                                        <td><?=$row->nmbarang;?></td>
                                      <!--   <td><?=$row->nmpemilik;?></td>
                                        <td><?=$row->kerusakan;?></td>
                                        <td><?=$row->kelengkapan;?></td> -->
                                        <td><?=$row->tglditerima;?></td>
                                       <!--  <td><?=$row->pm_id;?></td>
                                        <td><?=$row->teknisi_id;?></td> -->
                                        <td><?=$row->kondisibrg;?></td>
                                        <td><?=$row->tglambil;?></td>
                                      <!--   <td><?=$row->penyerah;?></td> -->
                                        <td><?=$row->biaya;?></td>
                                       <!--  <td><?=$admin->admin_pass;?></td> -->
                                        
                                    </tr>
                                     <?php $no++; $biaya=$biaya+$row->biaya; } ?>
                                   <!--  <tr>
                                         <td colspan="6">Total</td>
                                         <td><?php echo $biaya;?></td>
                                     </tr> -->
                                </tbody>
 </table>

</div>


</table>
</div>

<script src="<?php echo base_url();?>tambah/js/jspdf.js"></script>

<script src="<?php echo base_url();?>tambah/js/pdfFromHTML.js"></script>
<script src="<?php echo base_url();?>tambah/js/jquery.js"></script>
<script src="<?php echo base_url();?>tambah/js/bootstrap.min.js"></script>
