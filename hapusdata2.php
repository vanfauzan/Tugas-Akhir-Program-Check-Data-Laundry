<?php
include 'koneksi.php';
if(isset($_GET['waktu'])){
	$delete = mysqli_query($conn, "DELETE FROM barang WHERE waktu = '".$_GET['waktu']."' ");
	header('location:admin2.php');
}
?>