<?php 
	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();


	include "../../models/mobil_gallery_model.php";
	include "../../models/mobil_model.php";
// 	include "../../helpers/index.php";
	$mobil_galleryModel = new mobil_galleryModel();
	$mobilModel = new mobilModel();
	// $helpers = new helpers();

	if ($aksi) {
// 		if ($aksi == 'tambah') {
// 			$result = $mobil_galleryModel->add($_POST);
// 			$status = $result ? 1 : 2;
// 			$message = $result ? "Data berhasil ditambah" : "Data gagal ditambah";
// 			$helpers->setModal($status, $message);
// 			header("location:index.php");
// 		} else if ($aksi == 'edit') {
// 			print_r($_POST);
// 		} else if ($aksi == 'delete') {
// 			$result = $merekModel->delete($id);
// 			$status = $result ? 1 : 2;
// 			$message = $result ? "Data berhasil dihapus" : "Data gagal dihapus";
// 			$helpers->setModal($status, $message);
// 			header("location:index.php");
		// }
	} else if(isset($id)) {
		
		$dataMobil_gallery 	= $mobil_galleryModel->get($id);
		$detailMobil 		= $mobilModel->detail($id);
		$defaultImageMobil 	= $mobil_galleryModel->defaultImageMobil($id);
		

		$data['mobil_gallery']			= $dataMobil_gallery;
		$data['detail_mobil'] 			= mysqli_fetch_array($detailMobil);
		$data['default_image_mobil'] 	= mysqli_fetch_array($defaultImageMobil);
		// var_dump($data['detail_mobil']);
// 	}

// 	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
// 		$modal_status 	= $_SESSION['modal_status'];
// 		$modal_message 	= $_SESSION['modal_message'];
// 		unset($_SESSION['modal_status']);
// 		unset($_SESSION['modal_message']);
	}else{
		header('location:'.$baseUrl.'admin/views/mobil');
	}
?> 