<?php 
	session_start();

	if (isset($_SESSION['id_admin'])) { header('location:views'); }

	if (isset($_POST['email']) && isset($_POST['password'])) {

		include "helpers/index.php";
		$helpers 	= new helpers();

	// echo $_POST['email'];
	// echo $_POST['password'];
		$servername ="localhost";
		$username	="root"; 
		$password 	="";
		$datebase 	="showroom";

		$conn=mysqli_connect($servername, $username, $password, $datebase);

		if (!empty($_SESSION['id_admin'])) {
			header('location:index.php');
		}

		if (!$conn) {
			die("koneksi error. mysqli" . mysqli_connect_erorr());
		}

		$login 		= mysqli_query($conn, "SELECT * FROM tb_admin WHERE email = '".$_POST['email']."' AND password = '".md5($_POST['password'])."'");

		$dataLogin 	= mysqli_fetch_array($login);

		if ($dataLogin) {
			$_SESSION['id_admin'] 	= $dataLogin['id_admin'];
			$_SESSION['email'] 		= $dataLogin['email'];
			$_SESSION['nama'] 		= $dataLogin['nama'];
			// echo "Login Berhasi";
			header('location:views');
		} else {
			// echo "Email Atau password Salah !";
			$helpers->setModal('Email Atau password Salah !');
			header('location:index.php');
		}
	}
?>

<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('assets/images/images_admin/bmw1.jpg');/" class="w-full h-full">
	<div class="w-1/2 py-5 rounded">
		<div class="w-4/5 py-40 mx-auto">
			<form action="index.php" method="POST">
			<!-- Bagian Masukan User -->
				<p class="pl-48 text-3xl text-white font-serif">LOGIN</p>
				<p class="pt-3 pb-1 text-white">Email</p>
				<input class="mb-3 pl-2 rounded w-4/5" type="text" name="email" placeholder="Masukan Nama email ...">
			<!-- Bagian Pasukan Password -->
				<p class="pt-3 pb-1 text-white">Password</p>
				<input class="rounded w-4/5 pl-2" type="password" name="password" placeholder="Masukan password ..."><br/>
			<!-- Bagian button kirim -->
				<input class="rounded bg-blue-500 w-4/5 font-mono my-8 hover:bg-red-500 transition duration-50 cursor-pointer" type="submit" name="login" value="Login">
			</form>
		</div>
	</div>

	<?php 
		if (isset($_SESSION['modal_message']) && (!isset($_POST['email']) && !isset($_POST['password']))) {
			$modal_message = $_SESSION['modal_message'];
			unset($_SESSION['modal_message']);
		}
	?>

	<?php if(isset($modal_message)){ ?>
	   <?php include "layout/modal.php"; ?>
	<?php } ?>
</body>
</html>