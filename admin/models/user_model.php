<?php 
	class userModel {
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

		function add($params, $datanya){

			$query = mysqli_query($this->conn,"INSERT INTO tb_customer VALUES('','".$params['no_ktp']."', '".$params['nama_customer']."','".$params['no_telp']."','".$params['tgl_lahir']."','".$params['pekerjaan']."','".$params['status']."','".$datanya['foto_ktp']."','".$datanya['foto_kk']."','".$params['alamat']."', '0')");
			return $query;
		}

		function kontak($params){
			$query = mysqli_query($this->conn,"INSERT INTO kontak_kami VALUES('','".$params['nama']."', '".$params['email']."','".$params['saran']."', '0')");
			return $query;
		}
	}
?>