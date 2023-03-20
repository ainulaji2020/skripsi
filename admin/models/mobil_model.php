<?php 
	class mobilModel {
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

		function detail($id){
			$query = mysqli_query($this->conn,"SELECT * FROM `tb_mobil` INNER JOIN tb_merk ON tb_mobil.id_merek = tb_merk.id_merek INNER JOIN tb_harga ON tb_mobil.id_harga = tb_harga.id_harga WHERE tb_mobil.is_delete = '0' AND tb_mobil.id_mobil='$id'");
			return $query;
		}

		function add($params,$xx){
			$query = mysqli_query($this->conn,"INSERT INTO tb_mobil VALUES ('','".$params['id_harga']."','".$params['id_merek']."', '".$params['kursi']."','".$params['kode_mobil']."','".$params['nama_mobil']."','".$params['no_mesin']."','".$params['jenis_mobil']."','".$params['description']."','0')");

			$max = mysqli_query($this->conn,"SELECT MAX(id_mobil) from tb_mobil");
			$row = mysqli_fetch_row($max);

			$queryy = mysqli_query($this->conn,"INSERT INTO tb_foto_mobil VALUES ('','".$row[0]."','".$xx."','1')");

			return $queryy;
		}

		function get() {
			$query = mysqli_query($this->conn, "SELECT * FROM `tb_mobil` INNER JOIN tb_merk ON tb_mobil.id_merek = tb_merk.id_merek WHERE tb_mobil.is_delete = '0'");

			$hasil = array();

			if (mysqli_num_rows($query) > 0) {
				while($d = mysqli_fetch_array($query)) {
					$hasil[] = $d;
				}

				return $hasil;
			}
		}

		function getMobilImage(){
			
			$query = mysqli_query($this->conn, "SELECT * FROM `tb_mobil` INNER JOIN `tb_foto_mobil` ON tb_mobil.id_mobil = tb_foto_mobil.id_mobil WHERE tb_mobil.is_delete = '0' AND tb_foto_mobil.detail_foto_mobil = '1'");

			$hasil = array();

			if (mysqli_num_rows($query) > 0) {
				while($d = mysqli_fetch_array($query)) {
					$hasil[] = $d;
				}

				return $hasil;
			}
		}

		function update() {
			
		}

		function delete($id) {
			$query = mysqli_query($this->conn, "UPDATE `tb_mobil` SET is_delete = '1' WHERE `id_mobil`='$id'");
			// $query = mysqli_query($this->conn, "UPDATE `tb_foto_mobil` SET is_delete = '1' WHERE `id_mobil`='$id'");
			return $query;
		}

	}
?> 