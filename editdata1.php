<?php
include 'koneksi.php';
$editdata = mysqli_query($conn, "SELECT * FROM barang WHERE waktu = '".$_GET['waktu']."'");
$result = mysqli_fetch_array($editdata);
?>

<html>

<head>
	<title>Halaman Edit Data</title>
</head>

</body>
	<h1>Admin 1</h1>
	<h2>Edit Data Check Laundry</h2>
	<a href="admin1.php" style="padding:0.4% 0.8%;background-color:#fff;border-radius:2px;text-decoration:none;">Data Laundry</a><br><br>
	
	<form actions="" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $result['nama'] ?>" required></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td>:</td>
				<td><input type="text" name="waktu" value="<?php echo $result['waktu'] ?>" required></td>
			</tr>
			<tr>
				<td>Kaos</td>
				<td>:</td>
				<td><input type="text" name="kaos" value="<?php echo $result['kaos'] ?>" required></td>
			</tr>
			<tr>
				<td>Kemeja</td>
				<td>:</td>
				<td><input type="text" name="kemeja" value="<?php echo $result['kemeja'] ?>" required></td>
			</tr>
			<tr>
				<td>Celana Pendek</td>
				<td>:</td>
				<td><input type="text" name="celpen" value="<?php echo $result['celanapendek'] ?>" required></td>
			</tr>
			<tr>
				<td>Celana Panjang</td>
				<td>:</td>
				<td><input type="text" name="celpan" value="<?php echo $result['celanapanjang'] ?>" required></td>
			</tr>
			<tr>
				<td>Jaket</td>
				<td>:</td>
				<td><input type="text" name="jaket" value="<?php echo $result['jaket'] ?>" required></td>
			</tr>
			<tr>
				<td>Jas</td>
				<td>:</td>
				<td><input type="text" name="jas" value="<?php echo $result['jas'] ?>" required></td>
			</tr>
			<tr>
				<td>Celana Dalam</td>
				<td>:</td>
				<td><input type="text" name="celdal" value="<?php echo $result['celanadalam'] ?>" required></td>
			</tr>
			<tr>
				<td>Sarung / Mukena</td>
				<td>:</td>
				<td><input type="text" name="sarmuk" value="<?php echo $result['sarungmukena'] ?>" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="Save"></td>
			</tr>
		</table>
	</form>
	
	<?php
	if(isset($_POST['edit'])){
		$update = mysqli_query($conn, "UPDATE barang SET
		nama ='".$_POST['nama']."',
		waktu = '".$_POST['waktu']."',
		kaos = '".$_POST['kaos']."',
		kemeja = '".$_POST['kemeja']."',
		celanapendek = '".$_POST['celpen']."',
		celanapanjang = '".$_POST['celpan']."',
		jaket = '".$_POST['jaket']."',
		jas = '".$_POST['jas']."',
		celanadalam = '".$_POST['celdal']."',
		sarungmukena = '".$_POST['sarmuk']."'
		WHERE waktu = '".$_GET['waktu']."'");
		if($update){
			echo 'BERHASIL DIEDIT';
		}else{
			echo 'GAGAL DIEDIT';
		}
	}
	?>
	
</body>

</html>	