<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF Data Barang Inventaris Theatrisic</title>
</head>
<body>
	<center>
		<h1>Laporan PDF Data Barang</h1>
		<h1>Inventaris Theatrisic</h1>
	<table border="2" align="center">
		<thead>
			<tr>
				<th>Id Barang</th>
				<th>Nama Barang</th>
				<th>Kondisi</th>
				<th>Jumlah</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_list as $key => $value): ?>
       			<tr>
          			<td><?php echo $value->id_barang ?></td>
          			<td><?php echo $value->nama_barang ?></td>
          			<td><?php echo $value->kondisi ?></td>
          			<td><?php echo $value->jumlah ?></td>
          			<td><?php echo $value->status ?></td>
       			</tr>
       		<?php endforeach ?>
		</tbody>
	</table>
	</center>
</body>
</html>