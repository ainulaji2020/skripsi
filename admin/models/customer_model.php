<?php 
	class customerModel {
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

		function get() {
			$query = mysqli_query($this->conn, "SELECT * FROM `tb_customer` WHERE tb_customer.is_delete = '0'");

			$hasil = array();

			if (mysqli_num_rows($query) > 0) {
				while($d = mysqli_fetch_array($query)) {
					$hasil[] = $d;
				}
			}
			
			return $hasil;

		}

		function update($params, $datanya) {

			$query = mysqli_query($this->conn,"UPDATE tb_customer SET no_ktp='".$params['no_ktp']."',nama_customer='".$params['nama_customer']."',no_telephone='".$params['no_telp']."',tgl_lahir='".$params['tgl_lahir']."',pekerjaan='".$params['pekerjaan']."',status='".$params['status']."',foto_ktp='".$datanya['foto_ktp']."',foto_kk='".$datanya['foto_kk']."',alamat_tempat_tinggal='".$params['alamat']."' WHERE id_customer='".$params['id']."'");
			return $query;
		}

		function delete($id) {
			$query = mysqli_query($this->conn,"UPDATE `tb_customer` SET is_delete = '1' WHERE `id_customer`='$id'");
			return $query;
		}

		function detail($id){
			$query = mysqli_query($this->conn,"SELECT * FROM tb_customer WHERE is_delete = '0' AND id_customer='$id'");
			return $query;
		}
	}
?> 