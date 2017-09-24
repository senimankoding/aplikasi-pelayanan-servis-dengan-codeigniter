<?php $this->load->view('main/V_Head');?>

<body>
	<div class="container">
		<center><h3><em>TANDA PENGEMBALIAN SERVIS</em></h3></center>
	</div>

	<div class="inputan">
		<div class="container">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<img src="<?php echo base_url();?>tambah/img/logo.jpg" alt="">
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<table width="329">
				  <tr>
				    <td width="108" height="50"><B>Nama</B></td>
				    <td width="194">: <input style="border:none" type="text"  name="nmpemilik" value="<?=$data_servis->nmpemilik;?>" readonly></td>
				  </tr>
				  <tr>
				    <td height="50"><B>Alamat</B></td>
				    <td>: <input style="border:none" type="text" name="alamat" value="<?=$data_servis->alamat;?>" readonly></td><br>
				  </tr>
				  <tr>
				    <td height="50"><B>Telp.</B></td>
				    <td>: <input style="border:none" type="text"  value="<?=$data_servis->tlpn;?>" readonly></td>
				  </tr>
				</table>
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<table width="329">
				  <tr>
				    <td width="108" height="50"><B>NOTA</B></td>
				    <td width="194">: <input style="border:none" type="text"  name="no" value="<?=$data_servis->nota;?>" readonly></td>
				  </tr>
				  <tr>
				    <td height="50"><B>Tgl. Diterima</B></td>
				    <td>: <input style="border:none" type="date" name="tglditerima" value="<?=$data_servis->tglditerima;?>" readonly></td><br>
				  </tr>
				   <tr>
				    <td height="50"><B>Tgl. Diambil</B></td>
				    <td>: <input style="border:none" type="date" name="tglambil" value="<?=$data_servis->tglambil;?>" readonly></td><br>
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
			    <td height="180" valign="top"> <input style="border:none" type="text"  name="nmbarang" value=" <?=$data_servis->nmbarang;?>" readonly></td>
			    <td valign="top"> <input style="border:none" type="text"  name="kerusakan" value=" <?=$data_servis->kerusakan;?>" readonly></td>
			    <td valign="top"> <input style="border:none" type="text"  name="kelengkapan" value=" <?=$data_servis->kelengkapan;?>" readonly></td>
			  </tr>
			</table>
		</div>
	</div>

	<div class="keterangan">
		<div class="container">
			<table width="329">
				  <tr>
				    <td width="108" ><B>Kodisi Barang</B></td>
				    <td width="194">: <input style="border:none" type="text"  name="kondisibrg" value="<?=$data_servis->kondisibrg;?>" readonly></td>
				  </tr>
				 
				   <tr>
				    <td ><B>Biaya</B></td>
				    <td>: <input style="border:none" type="text" name="biaya" value="<?=$data_servis->biaya;?>" readonly></td><br>
				  </tr>

				  <tr>
				    <td ><B>ID Teknisi</B></td>
				    <td>: <input style="border:none" type="text" name="biaya" value="<?=$data_servis->teknisi_id;?>" readonly></td><br>
				  </tr>
				  
				</table>
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
					    <td width="101" height="35"><center><h3><strong>PENYERAH</strong></h3></center></td>
					  </tr>
					  <tr>
					    <td width="101" height="35"></td>
					  </tr>
					  <tr>
					    <td width="101" height="35"><h3><strong>______________</strong></h3></td>
					  </tr>
					  <tr><td><input type="text" style="border:none"  name="penerimabarang" value="ID PENYERAH: <?=$data_servis->penyerah;?>" readonly></td></tr>
				</table></center>
			</div>
		</div>
	</div>

</body>
</html>

<?php $this->load->view('main/V_Script');?>
<script>window.print();</script>



