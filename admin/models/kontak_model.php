<?php 
	class kontakModel {
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

		function get() {
			$query = mysqli_query($this->conn, "SELECT * FROM kontak_kami WHERE is_delete = '0'");

			$hasil = array();

			if (mysqli_num_rows($query) > 0) {
				while($d = mysqli_fetch_array($query)) {
					$hasil[] = $d;
				}
			}

			return $hasil;
		}

		function delete($id) {
			$query = mysqli_query($this->conn, "UPDATE kontak_kami SET is_delete = '1' WHERE id_kontak='$id'");
			return $query;
		}
	}
?> 