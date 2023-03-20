<?php 
	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();


	include "../../models/merk_model.php";
	include "../../helpers/index.php";
	$merekModel = new merekModel();
	$helpers = new helpers();

	if ($aksi) {
		if ($aksi == 'tambah') {
			$result = $merekModel->add($_POST);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil ditambah" : "Data gagal ditambah";
			$helpers->setModal($status, $message);
			header("location:index.php");
		}elseif ($aksi == 'edit') {
			$detail = mysqli_fetch_array($merekModel->detail($id));
			$data['detail'] = $detail;
			// print_r($detail);
			// die();
		}else if ($aksi == 'update') {
			$result = $merekModel->update($_POST);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil diedit" : "Data gagal diedit";
			$helpers->setModal($status, $message);
			header("location:index.php");
			// print_r($_POST);
		} else if ($aksi == 'delete') {
			$result = $merekModel->delete($id);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil dihapus" : "Data gagal dihapus";
			$helpers->setModal($status, $message);
			header("location:index.php");
		}
	} else {
		$dataMerek = $merekModel->get();

		
		$data['merek'] = $dataMerek;
	}

	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
		$modal_status 	= $_SESSION['modal_status'];
		$modal_message 	= $_SESSION['modal_message'];
		unset($_SESSION['modal_status']);
		unset($_SESSION['modal_message']);
	}
?> 