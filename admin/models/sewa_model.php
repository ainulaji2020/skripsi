<?php 
	class sewaModel {
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
			$query = mysqli_query($this->conn,"INSERT INTO tb_sewa VALUES('', '".$params['nama_merek']."', '0')");
			return $query;
		}

		function get() {
			$query = mysqli_query($this->conn, "SELECT * FROM tb_sewa WHERE is_delete = '0'");

			$hasil = array();

			if (mysqli_num_rows($query) > 0) {
				while($d = mysqli_fetch_array($query)) {
					$hasil[] = $d;
				}
				
			}
			return $hasil;
		}

		function update($params) {
			$query = mysqli_query($this->conn,"UPDATE tb_sewa SET no_sewa='".$params['no_sewa']."',tgl_sewa='".$params['tanggal_sewa']."',tgl_kembali='".$params['tanggal_kembali']."',biaya_sewa='".$params['biaya_sewa']."',denda_sewa='".$params['denda_sewa']."',status_sewa='".$params['status_sewa']."' WHERE id_sewa='".$params['id']."'");
			return $query;
		}

		function delete($id) {
			$query = mysqli_query($this->conn, "UPDATE tb_sewa SET is_delete = '1' WHERE id_sewa='$id'");
			return $query;
		}

		function detail($id){
			$query = mysqli_query($this->conn,"SELECT * FROM tb_sewa WHERE is_delete = '0' AND id_sewa='$id'");
			return $query;
		}

	}
?> 