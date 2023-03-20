<?php $nav = 'rental_mobil';?>
<!-- header -->
<?php include"layout_frontend/header.php"?>

<?php
  // include "admin/controllers/user_controller.php";
  $aksi_form = 'tambah';
?>

<!-- content -->
<h2 class="text-center text-xl py-8"><ins>ISI FORM DIBAWAH</ins></h2>
	<div class="w-2/4 mx-auto">
		<form action="admin/controllers/user_controller.php?aksi=tambah" method="POST" enctype="multipart/form-data" required>
			<input type="hidden" name="id_customer" value="id">
			<div class="flex flex-col mb-3 ">
				<label for="name">NO KTP (Kartu Tanda Penduduk)</label>
				<input 
				type="text" id="no_ktp" name="no_ktp" 
				class="px-3 py-2  rounded-md border w-full focus:bg border-black focus:outline-none  focus:text-black"
				autocomplete="off" required="">
			</div>

			 <div class="flex flex-col mb-3 ">
				<label for="name">Nama</label>
				<input 
				type="text" id="name" name="nama_customer" 
				class="px-3 py-2  rounded-md border w-full focus:bg border-black focus:outline-none  focus:text-black"
				autocomplete="off" required="">
			</div>

			<div class="flex flex-col mb-3">
				 <label>No Telephone</label>
			     <input 
				 type="text" id="no_telp" name="no_telp" 
				 class="px-3 py-2  rounded-md border w-full  focus:bg border-black focus:outline-none  focus:text-black"
				 autocomplete="off" required="">
			</div>

			<div class="flex flex-col mb-3">
				 <label>Tanggal Lahir</label>
			     <input 
				 type="date" id="ttl" name="tgl_lahir" 
				 class="px-3 py-2  rounded-md border w-full  focus:bg border-black focus:outline-none  focus:text-black"
				 autocomplete="off" required="">
			</div>

			<div class="flex flex-col mb-3">
				 <label>Pekerjaan</label>
			     <input 
				 type="text" id="pekerjaan" name="pekerjaan" 
				 class="px-3 py-2  rounded-md border w-full  focus:bg border-black focus:outline-none  focus:text-black"
				 autocomplete="off" required="">
			</div>

			<div class="flex flex-col mb-3">
				 <label>Menikah /Belum Nikah</label>
			     <input 
				 type="text" id="status" name="status" 
				 class="px-3 py-2  rounded-md border w-full  focus:bg border-black focus:outline-none  focus:text-black"
				 autocomplete="off" required="">
			</div>

			<div class="flex flex-col mb-3">
				 <label>Foto Kartu Tanda Penduduk (KTP)</label>
			     <input 
				 type="file" id="foto_ktp" name="foto_ktp" 
				 class="px-3 py-2  rounded-md border w-full  focus:bg border-black focus:outline-none  focus:text-black"
				 autocomplete="off" required="">
			</div>

			<div class="flex flex-col mb-3">
				 <label>Foto Kartu Keluarga (KK)</label>
			     <input 
				 type="file" id="foto_kk" name="foto_kk" 
				 class="px-3 py-2  rounded-md border w-full  focus:bg border-black focus:outline-none  focus:text-black"
				 autocomplete="off" required="">
			</div>

			<div class="flex flex-col mb-3">
				 <label for="message">Tempat Tinggal Sekarang</label>
			     <textarea 
				 rows="4" id="message" name="alamat" 
				 class="px-3 py-2  rounded-md border  w-full focus:bg border-black focus:outline-none  focus:text-black"
				></textarea>
	        </div>

			<div class="w-full pt-3">
				 <button type="submit" class="w-48 rounded-md border border-black px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-blue-500 hover:text-white text-xl cursor-pointer">KIRIM</button>
		   </div>
		</form>		    
	</div>
<!-- footer -->
<?php include"layout_frontend/footer.php"?>