<?php
	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();


	include "../../models/mobil_model.php";
	include "../../models/harga_model.php";
	include "../../models/merk_model.php";
	include "../../helpers/index.php";
	$mobilModel = new mobilModel();
	$hargaModel = new hargaModel();
	$merekModel = new merekModel();
	$helpers = new helpers();

	if ($aksi) {
		if ($aksi == 'tambah') {
			$gambar 	= 'gambar_'.strtotime("now")."_";
			$ekstensi 	=  array('png','jpg','jpeg','gif');
			$filename 	= $_FILES['foto_utama']['name'];
			$ukuran 	= $_FILES['foto_utama']['size'];
			$ext 		= pathinfo($filename, PATHINFO_EXTENSION);

			// echo $gambar;
			// echo "<br>";
			// print_r($ekstensi);
			// echo "<br>";
			// print_r($_FILES['foto_utama']);

			if(!in_array($ext,$ekstensi)){
				// echo $ext;
				$helpers->setModal(2, "File Harus Gambar");
				header("location:index.php");
			}else{
				// echo "Ini gambar";
				if ($ukuran	< 1044070) {
					$xx 	= $gambar.'_'.$filename;
					move_uploaded_file($_FILES['foto_utama']['tmp_name'], '../../assets/images/mobil/'.$xx);
					$result  = $mobilModel->add($_POST,$xx);
				}else{
					$result = 2;
				}
			}
			$status  = $result ? 1 : 2;
			$message = $result ? "Data berhasil ditambah" : "Data gagal ditambah";
			$helpers->setModal($status,$message);
			header("location:index.php");
		} else if ($aksi == 'edit') {
			print_r($_POST);
		} else if ($aksi == 'delete') {
			$result  = $mobilModel->delete($id);
			$status  = $result ? 1 : 2;
			$message = $result ? "Data berhasil dihapus" : "Data gagal dihapus";
			$helpers->setModal($status,$message);
			header("location:index.php");
		}
	} else {
		$dataMobil = $mobilModel->get();
		$dataHarga = $hargaModel->get();
		$dataMerek = $merekModel->get();

		$data = array();
		$data['mobil'] = $dataMobil;
		$data['harga'] = $dataHarga;
		$data['merek'] = $dataMerek;
	}

	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
		$modal_status = $_SESSION['modal_status'];
		$modal_message = $_SESSION['modal_message'];
		unset($_SESSION['modal_status']);
		unset($_SESSION['modal_message']);
	}
?> 