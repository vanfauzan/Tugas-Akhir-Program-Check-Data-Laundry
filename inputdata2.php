<html>

<head>
	<title>Halaman Input Data</title>
</head>

</body>
	<h1>Admin 2</h1>
	<h2>Input Data Check Laundry</h2>
	<a href="admin2.php"style="padding:0.4% 0.8%;background-color:#fff;border-radius:2px;text-decoration:none;">Data Laundry</a> <br><br>
	<form actions="" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Nama" required></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td>:</td>
				<td><input type="text" name="waktu" placeholder="Waktu" required></td>
			</tr>
			<tr>
				<td>Kaos</td>
				<td>:</td>
				<td><input type="text" name="kaos" placeholder="Kaos" required></td>
			</tr>
			<tr>
				<td>Kemeja</td>
				<td>:</td>
				<td><input type="text" name="kemeja" placeholder="Kemeja" required></td>
			</tr>
			<tr>
				<td>Celana Pendek</td>
				<td>:</td>
				<td><input type="text" name="celpen" placeholder="Celana Pendek" required></td>
			</tr>
			<tr>
				<td>Celana Panjang</td>
				<td>:</td>
				<td><input type="text" name="celpan" placeholder="Celana Panjang" required></td>
			</tr>
			<tr>
				<td>Jaket</td>
				<td>:</td>
				<td><input type="text" name="jaket" placeholder="Jaket" required></td>
			</tr>
			<tr>
				<td>Jas</td>
				<td>:</td>
				<td><input type="text" name="jas" placeholder="Jas" required></td>
			</tr>
			<tr>
				<td>Celana Dalam</td>
				<td>:</td>
				<td><input type="text" name="celdal" placeholder="Celana Dalam" required></td>
			</tr>
			<tr>
				<td>Sarung / Mukena</td>
				<td>:</td>
				<td><input type="text" name="sarmuk" placeholder="Sarung / Mukena" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" value="Save"></td>
			</tr>
		</table>
	</form>
	
	<?php
	include 'koneksi.php';
	if(isset($_POST['simpan'])){
	$insert = mysqli_query($conn, "INSERT INTO barang VALUES
	('".$_POST['nama']."',
	'".$_POST['waktu']."',
	'".$_POST['kaos']."',
	'".$_POST['kemeja']."',
	'".$_POST['celpen']."',
	'".$_POST['celpan']."',
	'".$_POST['jaket']."',
	'".$_POST['jas']."',
	'".$_POST['celdal']."',
	'".$_POST['sarmuk']."')");
		if($insert){
			echo 'BERHASIL DISIMPAN';
		}else{
			echo 'GAGAL DISIMPAN';
		}
	}
	?>
</body>

</html>	