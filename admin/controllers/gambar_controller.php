<?php 
	$baseUrl = 'http://localhost/rental_mobil/';
	$aksi 	= @$_GET['aksi'];
	$id 	= @$_GET['id'];

	$data = array();


	include "../../models/gambar_model.php";
	include "../../helpers/index.php";
	$gambarModel = new gambarModel();
	$helpers = new helpers();

	if ($aksi) {
		if ($aksi == 'tambah') {
			//isi disini data gambar
			$gambar 	= 'gambar_'.strtotime("now")."_";
			$ekstensi 	=  array('png','jpg','jpeg','gif');
			$filename 	= $_FILES['image']['name'];
			$ukuran 	= $_FILES['image']['size'];
			$ext 		= pathinfo($filename, PATHINFO_EXTENSION);

			

			if(!in_array($ext,$ekstensi)){
				// echo $ext;
				$helpers->setModal(2, "File Harus Gambar");
				header("location:index.php");
			}else{
				// echo "Ini gambar";
				if ($ukuran	< 1044070) {
					$xx 	= $gambar.'_'.$filename;
					move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/images/gallery/'.$xx);
					$result = $gambarModel->add($xx);
				}else{
					$result = 2;
				}
			}
	
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil ditambah" : "Data gagal ditambah";
			$helpers->setModal($status, $message);
			header("location:index.php");
		}elseif ($aksi == 'edit') {
			$detail = mysqli_fetch_array($gambarModel->detail($id));
			$data['detail'] = $detail;
			// print_r($detail);
			// die();
		}else if ($aksi == 'update') {

			$gambar 	= 'gambar_'.strtotime("now")."_";
			$ekstensi 	=  array('png','jpg','jpeg','gif');
			$filename 	= $_FILES['image']['name'];
			$ukuran 	= $_FILES['image']['size'];
			$ext 		= pathinfo($filename, PATHINFO_EXTENSION);

			if(!in_array($ext,$ekstensi)){
				// echo $ext;
				$helpers->setModal(2, "File Harus Gambar");
				header("location:index.php");
			}else{
				// echo "Ini gambar";
				if ($ukuran	< 1044070) {
					$xx 	= $gambar.'_updt'.$filename;
					move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/images/gallery/'.$xx);

					$params['id'] = @$_POST['id'];;
					$params['nama_file'] = $xx;
					$result = $gambarModel->update($params);
				}else{
					$result = 2;
				}
			}

			// $result = $gambarModel->update($_POST);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil diedit" : "Data gagal diedit";
			$helpers->setModal($status, $message);
			header("location:index.php");
			// print_r($_POST);
		} else if ($aksi == 'delete') {
			$result = $gambarModel->delete($id);
			$status = $result ? 1 : 2;
			$message = $result ? "Data berhasil dihapus" : "Data gagal dihapus";
			$helpers->setModal($status, $message);
			header("location:index.php");
		}
	} else {
		$dataGambar = $gambarModel->get();
		
		$data['gambar'] = $dataGambar;
	}

	if (isset($_SESSION['modal_status']) && isset($_SESSION['modal_message']) && !isset($aksi)) {
		$modal_status 	= $_SESSION['modal_status'];
		$modal_message 	= $_SESSION['modal_message'];
		unset($_SESSION['modal_status']);
		unset($_SESSION['modal_message']);
	}
?> 
