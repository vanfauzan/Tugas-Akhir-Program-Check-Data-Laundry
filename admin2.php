<html>

<head>
	<title>Halaman Data Admin 2</title>
</head>

<body>
<h1>Admin 2</h1>
<h2>Data Check Laundry</h2>
<a href="inputdata2.php" style="padding:0.4% 0.8%;background-color:#fff;border-radius:2px;text-decoration:none;">Penambahan Data</a> <br><br>
<table border="1" cellspacing="0" width="50%">
	<tr style="text-align:center;font-weight:bold;background-color:#eee;">
		<td>No</td>
		<td>Nama</td>
		<td>Waktu</td>
		<td>Kaos</td>
		<td>Kemeja</td>
		<td>Celana Pendek</td>
		<td>Celana Panjang</td>
		<td>Jaket</td>
		<td>Jas</td>
		<td>Celana Dalam</td>
		<td>Sarung / Mukena</td>
		<td>Keterangan</td>
	</tr>
	
	<?php
	include 'koneksi.php';
	$no = 1;
	$select = mysqli_query($conn, "SELECT * FROM barang");
	if(mysqli_num_rows($select) > 0){
	while($hasil = mysqli_fetch_array($select)){
	?>
	
	<tr style="text-align:center;">
		<td><?php echo $no++ ?></td>
		<td><?php echo $hasil['nama'] ?></td>
		<td><?php echo $hasil['waktu'] ?></td>
		<td><?php echo $hasil['kaos'] ?></td>
		<td><?php echo $hasil['kemeja'] ?></td>
		<td><?php echo $hasil['celanapendek'] ?></td>
		<td><?php echo $hasil['celanapanjang'] ?></td>
		<td><?php echo $hasil['jaket'] ?></td>
		<td><?php echo $hasil['jas'] ?></td>
		<td><?php echo $hasil['celanadalam'] ?></td>
		<td><?php echo $hasil['sarungmukena'] ?></td>
		<td>
			<a href="editdata2.php?waktu=<?php echo $hasil['waktu'] ?>">Edit</a>
			<br>
			<a href="hapusdata2.php?waktu=<?php echo $hasil['waktu'] ?>">Hapus</a>
		</td>	
	</tr>
	
	<?php }}else{ ?>
	
	<tr>
		<td colspan="10" align="center">Tidak Ada Data</td>
	</tr>
	
	<?php } ?>
	
</table>
<br></br>
<a href="vanlogin.php"><input type="submit" name="logout" value="Logout" /></a>		
</body>
</html>