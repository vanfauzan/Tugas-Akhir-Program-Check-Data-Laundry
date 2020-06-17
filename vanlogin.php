<html>

<head>
	<title>Halaman Login Check Data Laundry</title>
</head>

<body>
	<h3>Silahkan Login Untuk Check Data Laundry</h3>
	<form action="" method="POST">
		<input type="text" name="user" placeholder="Enter Your Username" />
		<br>
		</br>
		<input type="password" name="pass" placeholder="Enter Your Password" />
		<input type="submit" name="login" value="Login" />
	</form>
	
	<?php
	if(isset($_POST['login'])){
		$conn = mysqli_connect('localhost','root','','nuaing');
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$data_admin = mysqli_query($conn, "SELECT * FROM login_admin WHERE username = '$user' AND password = '$pass'");
		$hasil = mysqli_fetch_array($data_admin);
		$adminke = $hasil['admin_ke'];
		$row = mysqli_num_rows($data_admin);
		if($row > 0){
			if($adminke == '1'){
				header('location:admin1.php');
			}elseif($adminke == '2'){
				header('location:admin2.php');
			}
		}else{
			echo 'login gagal';
		}
	}
	?>
</body>

</html>