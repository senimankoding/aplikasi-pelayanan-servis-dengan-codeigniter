<?php $this->load->view('main/V_Head');?>

<body>
	<div class="container">
		<center><h3><em>TANDA TERIMA SERVIS</em></h3></center>
	</div>

	<div class="inputan">
		<div class="container">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<img src="<?php echo base_url();?>tambah/img/logo2.jpg" alt="">
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<table width="329">
				  <tr>
				    <td width="90" ><font size="4"><B>Nama</B></td>
				    <td width="194">: <font size="4"><input style="border:none" type="text"  name="nmpemilik" value="<?=$data_servis->nmpemilik;?>" readonly></td>
				  </tr>
				  <tr>
				    <td><font size="4"><B>Alamat</B></td>
				    <td>: <font size="4"><input style="border:none" type="text" name="alamat" value="<?=$data_servis->alamat;?>" readonly></td><br>
				  </tr>
				  <tr>
				    <td ><font size="4"><B>Telp.</B></td>
				    <td >: <font size="4"><input style="border:none"  type="text"  value="<?=$data_servis->tlpn;?>" readonly></td>
				  </tr>
				</table>
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<table width="329">
				  <tr>
				    <td width="90"><font size="4"><B>NOTA</B></td>
				    <td width="194">: <font size="4"><input style="border:none" type="text"  name="nota" value="<?=$data_servis->nota;?>" readonly></td>
				  </tr>
				  <tr>
				    <td><font size="4"><B>Tgl. Masuk</B></td>
				    <td>: <font size="4"><input style="border:none" type="date" name="tglditerima" value="<?=$data_servis->tglditerima;?>" readonly></td><br>
				  </tr>
				  
				</table>
			</div>
		</div>
	</div>

	<div class="tabel">
		<div class="container">
			<br><table width="100%" border="4">
			  <tr>
			    <th><center>
			      <strong>NAMA BARANG</strong>
			    </center></th>
			    <th><center>
			      <strong>KERUSAKAN</strong>
			    </center></th>
			    <th><center>
			      <strong>KELENGKAPAN</strong>
			    </center></th>
			  </tr>

			  <tr>
			    <td height="180" valign="top"> <font size="4"><input style="border:none" type="text"  name="nmbarang" value=" <?=$data_servis->nmbarang;?>" readonly></td>
			    <td valign="top"> <font size="4"><input style="border:none" type="text"  name="kerusakan" value=" <?=$data_servis->kerusakan;?>" readonly></td>
			    <td valign="top"> <font size="4"><input style="border:none" type="text"  name="kelengkapan" value=" <?=$data_servis->kelengkapan;?>" readonly></td>
			  </tr>
			</table>
		</div>
	</div>

	<div class="keterangan">
		<div class="container">
			<center><img src="<?php echo base_url();?>tambah/img/logo1.jpg" alt=""></center>
		</div>
	</div>

	<div class="bawah">
		<div class="container">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<center><table width="120" >
					  <tr>
					    <td width="101" height="35"><center><h3><strong>PENERIMA</strong></h3></center></td>
					  </tr>
					  <tr>
					    <td width="101" height="35"></td>
					  </tr>
					  <tr>
					    <td width="101" height="35"><h3><strong>______________</strong></h3></td>
					  </tr>
					  <tr><td><font size="4"><input type="text" style="border:none"  name="penerimabarang" value="ID PENERIMA: <?=$data_servis->pm_id;?>" readonly></td></tr>
				</table></center>
			</div>
		</div>
	</div>

</body>
</html>

<?php $this->load->view('main/V_Script');?>

<script>window.print();</script>



