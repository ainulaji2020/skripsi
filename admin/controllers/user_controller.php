<?php 
	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();
	

	include "../models/user_model.php";
	include "../helpers/index.php";
	$userModel = new userModel();
	$helpers = new helpers();


	if ($aksi) {
		if ($aksi == 'tambah') {
			// var_dump($_POST);
			// die;
			$customer 	= 'ktp_'.strtotime("now")."_";
			$customer2 	= 'kk_'.strtotime("now")."_";
			$ekstensi 	=  array('png','jpg','jpeg','gif');
			$filename 	= $_FILES['foto_ktp']['name'];
			$filename2 	= $_FILES['foto_kk']['name'];
			$ukuran 	= $_FILES['foto_ktp']['size'];
			$ukuran2	= $_FILES['foto_kk']['size'];
			$ext 		= pathinfo($filename, PATHINFO_EXTENSION);

			if(!in_array($ext,$ekstensi)){
				// echo $ext;
				$helpers->setModal(2, "File Harus Gambar");
				header("../../rental_mobil.php");
			}else{
				// echo "Ini gambar";
				if ($ukuran	< 1044070) {
					$xx 	= $filename;
					$xxx 	= $filename2;
					move_uploaded_file($_FILES['foto_ktp']['tmp_name'], '../assets/images/ktp/'.$xx);
					move_uploaded_file($_FILES['foto_kk']['tmp_name'], '../assets/images/kk/'.$xxx);
					// $result = $customerModel->add($xx);
					$datenya['foto_ktp'] = $xx;
					$datenya['foto_kk'] = $xxx;
					$result = $userModel->add($_POST, $datenya);

				}else{
					$result = 2;
				}
			}

			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil ditambah" : "Data gagal ditambah";
			$helpers->setModal($status, $message);
			header("location:../../rental_mobil.php?alt=1");
	}else if($aksi == 'tambahsaran'){
		$result = $userModel->kontak($_POST);
		header("location:../../kontak_kami.php");
		// echo "TEs";
		// die();
	}
		} 

	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
		$modal_status = $_SESSION['modal_status'];
		$modal_message = $_SESSION['modal_message'];
		unset($_SESSION['modal_status']);
		unset($_SESSION['modal_message']);
	}
?> 

