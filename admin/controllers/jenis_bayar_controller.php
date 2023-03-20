<?php
	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();


	include "../../models/jenis_bayar_model.php";
	include "../../helpers/index.php";
	$jenis_bayarModel = new jenis_bayarModel();
	$helpers = new helpers(); 

	if ($aksi) {
		if ($aksi == 'tambah') {
			$result = $jenis_bayarModel->add($_POST);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil ditambah" : "Data gagal ditambah";
			$helpers->setModal($status, $message);
			header("location:index.php");
		} else if ($aksi == 'edit') {
			$detail = mysqli_fetch_array($jenis_bayarModel->detail($id));
			$data['detail'] = $detail;
			// print_r($_POST);
		}else if ($aksi == 'update') {
			$result = $jenis_bayarModel->update($_POST);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil diedit" : "Data gagal diedit";
			$helpers->setModal($status, $message);
			header("location:index.php");
		}else if ($aksi == 'delete') {
			$result = $jenis_bayarModel->delete($id);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil dihapus" : "Data gagal dihapus";
			$helpers->setModal($status,$message);
			header("location:index.php");
		}
	} else {
		$data_jenis_bayar = $jenis_bayarModel->get();
		
		// $data = array();
		$data['jenis_bayar'] = $data_jenis_bayar;
	}
	 
	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
		$modal_status = $_SESSION['modal_status'];
		$modal_message = $_SESSION['modal_message'];
		unset($_SESSION['modal_status']);
		unset($_SESSION['modal_message']);
	}
?> 