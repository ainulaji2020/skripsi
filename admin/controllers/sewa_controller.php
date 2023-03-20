<?php 
	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();

	
	include "../../models/sewa_model.php";
	include "../../helpers/index.php";
	$sewaModel = new sewaModel();
	$helpers = new helpers();

	if ($aksi) {
		if ($aksi == 'tambah') {
			print_r($_POST);
		} else if ($aksi == 'edit') {
			$detail = mysqli_fetch_array($sewaModel->detail($id));
			$data['detail'] = $detail;
		}else if ($aksi == 'update') {
			$result = $sewaModel->update($_POST);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil diedit" : "Data gagal diedit";
			$helpers->setModal($status, $message);
			header("location:index.php");
			// print_r($_POST); 
		}else if ($aksi == 'delete') {
			$result = $sewaModel->delete($id);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil dihapus" : "Data gagal dihapus";
			$helpers->setModal($status,$message);
			header("location:index.php");
		}
	} else {
		$data_sewa = $sewaModel->get();
		// if ($id) {
			
		// }

		$data = array();
		$data['sewa'] = $data_sewa;
	}
	 
	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
		$modal_status = $_SESSION['modal_status'];
		$modal_message = $_SESSION['modal_message'];
		unset($_SESSION['modal_status']);
		unset($_SESSION['modal_message']);
	}
?> 
