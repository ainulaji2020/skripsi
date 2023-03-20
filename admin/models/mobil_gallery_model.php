<?php 
	class mobil_galleryModel {
		var $servername ="localhost";
		var $username	="root";
		var $password 	="";
		var $database 	="showroom";
		var $conn;

		function __construct(){
			$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

			if (!$this->conn) {
				die("koneksi error. mysqli" . mysqli_connect_erorr());
			}
		}

		function get($id){
			$query = mysqli_query($this->conn,"SELECT * FROM tb_foto_mobil WHERE  id_mobil =".$_GET['id']." AND detail_foto_mobil='0'");
			$hasil = array();

			if (mysqli_num_rows($query) > 0) {
				while($d = mysqli_fetch_array($query)) {
					$hasil[] = $d;
				}
			}

			return $hasil;
		}

		function update($params) {
			// $query = mysqli_query($this->conn,"UPDATE tb_foto_mobil SET gambar='".$params['nama_file']."' WHERE id_='".$params['id']."'");
			// return $query;
		}

		function defaultImageMobil($id){
			$query = mysqli_query($this->conn,"SELECT * FROM tb_foto_mobil WHERE id_mobil = '$id' AND detail_foto_mobil='1'");
			return $query;
		}

		function detail($id){
			$query = mysqli_query($this->conn,"SELECT * FROM tb_foto_mobil WHERE detail_foto_mobil ='0' AND id_mobil='".$id."'");
			// return $query;
			$hasil = array();

			if (mysqli_num_rows($query) > 0) {
				while($d = mysqli_fetch_array($query)) {
					$hasil[] = $d;
				}
			}

			return $hasil;
		}

		function detailDefault($id){
			$query = mysqli_query($this->conn,"SELECT * FROM tb_foto_mobil WHERE detail_foto_mobil ='1' AND id_mobil='".$id."'");
			return mysqli_fetch_array($query);
		}
		
	}
?> 