 
<!DOCTYPE html>
<html>
	<head>
		<title> Edit Data </title>
		<link href="<?php echo base_url(); ?> assets/css/bootstrap.min.css" rel="stylesheet">
		<link name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<div class='content' align='center'>
			<form action="<?php echo base_url('welcome/update'); ?>" method="POST">
				<table class='table' align='center' cellpadding='5' cellspacing='1'>
                    <tr>
                        <?php foreach ($order as $queries) { ?>
                        <input type="hidden" name="id_order" value="<?php echo $queries->id_order; ?>">
                    </tr>
                    <tr> 
                        <td width="150px"><b> Nama Pemesan </b></td>
						<td>
							<input class="text-field" type="text" name="nama_pemesan" value="<?php echo $queries->nama_pemesan; ?>">
						</td>
					</tr>
					<tr>
						<td width="300px"><b> Alamat Pemesan </b></td>
						<td>
							<input class="text-field" type="text" name="add_pemesan"  value="<?php echo $queries->add_pemesan; ?>" placeholder="Alamat Pemesan">
						</td>
                    </tr>
					<tr>
						<td width="150px"><b> No Telp. </b></td>
						<td>
							<input class="text-field" type="text" name="no_telp"  value="<?php echo $queries->no_telp; ?>" placeholder="No Telp">
						</td>
					</tr>
					<tr>
						<td width="100px"><b> Jenis Obat </b></td>
                        <td>
                            <select name="jenis_barang"  value="<?php echo $queries->jenis_barang; ?>">
                              
                                <option value="<?php echo $queries->jenis_barang; ?>"> <br>
                                <option value="Ringan"> Ringan <br>
                                <option value="Sedang"> Sedang <br>
                                <option value="Keras"> Keras <br>
                            </select>
						</td>
					</tr>
					<tr>
						<td width="150px"><b> Nama Obat </b></td>
						<td>
							<input class="text-field" type="text" name="nama_barang"  value="<?php echo $queries->nama_barang; ?>" placeholder="Nama Obat">
						</td>
					</tr>
					<tr>
						<td width="100"><b>Dosis</b></td>
                        <td>
							<input class="text-field" type="text" name="dosis"  value="<?php echo $queries->dosis; ?>" placeholder="Dosis">
						</td>
					</tr>
					<tr>
						<td width="100"><b>Jumlah</b></td>
                        <td>
							<input class="text-field" type="text" name="jumlah"  value="<?php echo $queries->jumlah; ?>" placeholder="jumlah">
						</td>
                    </tr>
					<tr>
						<td width="100"><b>Status</b></td>
						<td>
							<input type="radio" name="status" value="Belum Bayar"> Belum Bayar <br>
							<input type="radio" name="status" value="Lunas"> Lunas <br>
						</td>
					</tr>

                    <tr>
                        <?php } ?>
						<td> Submit </td>
						<td><input type="submit" name="addData" value="simpan"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
	<script src="<?php echo base_url()?>assets/js/jquery-3.1.1.min.js"></script>
	
	<!-- bootsrap Core JavaScript -->
	<script src="<?php echo base_url()?>assets/js/bootsrap.min.js"></script>
</html>
