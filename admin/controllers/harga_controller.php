<?php 
	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();

	
	include "../../models/harga_model.php";
	include "../../helpers/index.php";
	$hargaModel = new hargaModel();
	$helpers = new helpers();

	if ($aksi) {
		if ($aksi == 'tambah') {
			$result = $hargaModel->add($_POST);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil ditambah" : "Data gagal ditambah";
			$helpers->setModal($status, $message);
			header("location:index.php");
		} else if ($aksi == 'edit') {
			$detail = mysqli_fetch_array($hargaModel->detail($id));
			$data['detail'] = $detail;
			// print_r($detail);
			// die();
		}else if ($aksi == 'update') {
			$result = $hargaModel->update($_POST);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil diedit" : "Data gagal diedit";
			$helpers->setModal($status, $message);
			header("location:index.php");
			// print_r($_POST);
			// die();
		}else if ($aksi == 'delete') {
			$result = $hargaModel->delete($id);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil dihapus" : "Data gagal dihapus";
			$helpers->setModal($status,$message);
			header("location:index.php"); 
		}
	} else {
		$data_harga = $hargaModel->get();
		
		// $data = array();
		$data['harga'] = $data_harga;
	}
	 
	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
		$modal_status = $_SESSION['modal_status'];
		$modal_message = $_SESSION['modal_message'];
		unset($_SESSION['modal_status']);
		unset($_SESSION['modal_message']);
	}
?> 
