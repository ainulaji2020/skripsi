<?php 
 	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();


	include "../../models/kontak_model.php";
	include "../../helpers/index.php";
	$kontakModel = new kontakModel();
	$helpers = new helpers();

	if ($aksi) {
		if ($aksi == 'tambah') {
			print_r($_POST);
		} else if ($aksi == 'edit') {
			print_r($_POST);
		} else if ($aksi == 'delete') {
			$result = $kontakModel->delete($id);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil dihapus" : "Data gagal dihapus";
			$helpers->setModal($status, $message);
			header("location:index.php");
		}
	} else {
		$dataKontak = $kontakModel->get();

		// if ($id) {
			
		// }

		$data = array();
		$data['kontak'] = $dataKontak;
	}

	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
		$modal_status 	= $_SESSION['modal_status'];
		$modal_message 	= $_SESSION['modal_message'];
		unset($_SESSION['modal_status']);
		unset($_SESSION['modal_message']);
	}
?> 