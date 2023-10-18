<!DOCTYPE html>
<html>
<head>
	<title>TOKO KELONTONG NABILA</title>
</head>
<body>
 
	<h2>TOKO NABILA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH BARANG</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>KODE BARANG</th>
			<th>NAMA BARANG</th>
			<th>SATUAN BARANG</th>
            <th>STOK BARANG</th>
            <th>HARGA BARANG</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_toko");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kodeBarang']; ?></td>
                <td><?php echo $d['namaBarang']; ?></td>
				<td><?php echo $d['satuanBarang']; ?></td>
				<td><?php echo $d['stokBarang']; ?></td>              
                <td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['idBarang']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['idBarang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>