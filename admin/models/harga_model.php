<?php 
	class hargaModel {
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

		function add($params){
			$query = mysqli_query($this->conn,"INSERT INTO tb_harga VALUES('', '".$params['harga']."','".$params['durasi']."', '0')");
			return $query;
		}

		function get() {
			$query = mysqli_query($this->conn, "SELECT * FROM `tb_harga` WHERE is_delete = '0'");

			$hasil = array();

			if (mysqli_num_rows($query) > 0) {
				while($d = mysqli_fetch_array($query)) {
					$hasil[] = $d;
				}
			}
			
			return $hasil;

		}

		function update($params) {
			$query = mysqli_query($this->conn,"UPDATE tb_harga SET harga='".$params['harga']."',durasi='".$params['durasi']."' WHERE id_harga='".$params['id']."'");
			return $query;
		}

		function delete($id) {
			$query = mysqli_query($this->conn, "UPDATE `tb_harga` SET is_delete = '1' WHERE `id_harga`='$id'");
			return $query;
		}

		function detail($id){
			$query = mysqli_query($this->conn,"SELECT * FROM tb_harga WHERE is_delete = '0' AND id_harga='$id'");
			return $query;
		}
		
	}
?> 