<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pemesanan Obat Apotek Wonder</title>
  </head>
  <body>
	<div class="container">
        <div class="panel panel-default">
            <h2  align='center'>Pemesanan Obat Apotek Wonder</h2>
            <table class="table table-bordered table-striped" cellpadding='5' cellspacing='0' border='1' border-color="pink" align="center">
                <thead>
                <tr>
                    <th>id order</th>
                    <th>Nama Pemesan</th>
                    <th>Alamat Pemesan</th>
                    <th>No Telp</th>
                    <th>Jenis Obat</th>
                    <th>Nama Obat</th>
                    <th>Dosis</th>
                    <th>Jumlah</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <?php
                    foreach($order as $queries){
                ?>
                <tbody>
                <tr align="center">
                    <td><?php echo $queries->id_order; ?></td>
                    <td><?php echo $queries->nama_pemesan; ?></td>
                    <td><?php echo $queries->add_pemesan; ?></td>
                    <td><?php echo $queries->no_telp; ?></td>
                    <td><?php echo $queries->jenis_barang; ?></td>
                    <td><?php echo $queries->nama_barang; ?></td>
                    <td><?php echo $queries->dosis; ?></td>
                    <td><?php echo $queries->jumlah; ?></td>
                    <td>
                        <?php echo anchor('Welcome/action_edit/'.$queries->id_order, 'Edit'); ?> ||  
                        <a href="<?php echo base_url('Welcome/action_delete/'.$queries->id_order); ?>">Hapus</a>
                    </td>
                </tr>
                </tbody>
				<?php } ?>
            </table>
            <div class="button" align="center"><br><?php echo anchor('welcome/add_data/','ADD')?></div>

        </div>
    </div>    
	
	
	<footer>
	</footer>
  </body>
</html>
