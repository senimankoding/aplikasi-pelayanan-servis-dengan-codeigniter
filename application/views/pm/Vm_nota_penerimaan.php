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
				    <td width="90"><font size="4"><B>Nama</B></td>
				    <td width="194">: <font size="4"><input style="border:none" type="text"  name="nmpemilik" value="<?php echo $_POST["nmpemilik"]; ?>" readonly></td>
				  </tr>
				  <tr>
				    <td><font size="4"><B>Alamat</B></td>
				    <td>: <font size="4"><input style="border:none" type="text" name="alamat" value="<?php echo $_POST["alamat"]; ?>" readonly></td><br>
				  </tr>
				  <tr>
				    <td><font size="4"><B>Telp.</B></td>
				    <td>: <font size="4"><input style="border:none" type="text"  value="<?php echo $_POST["tlpn"]; ?>" readonly></td>
				  </tr>
				</table>
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<table width="329">
				  <tr>
				    <td width="90"><font size="4"><B>NOTA</B></td>
				    <td width="194">: <font size="4"><input style="border:none" type="text"  name="no" value="<?php echo $_POST["nota"]; ?>" readonly></td> 
				  </tr>
				  <tr>
				    <td><font size="4"><B>Tgl. Masuk</B></td>
				    <td>: <font size="4"><input style="border:none" type="" name="tglditerima" value="<?php echo $_POST["tglditerima"]; ?>" readonly></td><br>
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
			    <td height="180" valign="top"> <font size="4"><input style="border:none" type="text"  name="nmbarang" value=" <?php echo $_POST["nmbarang"]; ?>" readonly></td>
			    <td valign="top"> <font size="4"><input style="border:none" type="text"  name="kerusakan" value=" <?php echo $_POST["kerusakan"]; ?>" readonly></td>
			    <td valign="top"> <font size="4"><input style="border:none" type="text"  name="kelengkapan" value=" <?php echo $_POST["kelengkapan"]; ?>" readonly></td>
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
					  <tr><td><font size="4"><input type="text" style="border:none"  name="penerimabarang" value="ID PENERIMA: <?php echo $_POST["pm_id"]; ?>" readonly></td></tr>
				</table></center>
			</div>
		</div>
	</div>

</body>
</html>

<?php $this->load->view('main/V_Script');?>

<script>window.print();</script>



