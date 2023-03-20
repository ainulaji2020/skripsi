<?php $nav = 'kontak_kami';?>
<?php include"layout_frontend/header.php"?>

<?php
  // include "admin/controllers/user_controller.php";
  $aksi_form = 'tambahsaran';

?>

<div class="w-full h-24 bg-gray-800 text-center text-gray-200 py-6 text-4xl font-arial shadow-lg">
		<div>Kontak Kami</div>
	</div>
	<div class="containeer flex flex-wrap">
		<div class="w-11/12 mx-auto bg-gray-200 mt-20 rounded-md shadow-lg flex flex-wrap ">
			<div class="w-3/5  flex flex-wrap pt-28">
				<div class="text-5xl px-28 pt-6 font-serif w-full">Kontak Kami <br><p class="text-lg">Silahkan tinggalkan Pesan anda , Pada Kolom Yang tersedia</p></div>
			</div>
			<div class=" w-2/5 ">
				<form action="admin/controllers/user_controller.php?aksi=tambahsaran" enctype="multipart/form-data" method="POST" class="w-full p-6 ">
				    <h2 class="text-2xl pb-3 font-semibold">Send Message</h2>
				    <div>
				        <div class="flex flex-col mb-3 ">
				        <label for="name">Nama</label>
				        <input 
				            type="text" id="name" name="nama" 
				            class="px-3 py-2  rounded-md border w-full focus:bg border-black focus:outline-none  focus:text-black"
				            autocomplete="off">
				        </div>
				        <div class="flex flex-col mb-3">
				        <label for="email">Email</label>
				        <input 
				            type="text" id="email" name="email" 
				            class="px-3 py-2  rounded-md border w-full  focus:bg border-black focus:outline-none  focus:text-black"
				            autocomplete="off">
				        </div>
				        <div class="flex flex-col mb-3">
				        <label for="saran">Kritik dan Saran</label>
				        <textarea 
				            rows="4" id="saran" name="saran" 
				            class="px-3 py-2  rounded-md border  w-full focus:bg border-black focus:outline-none  focus:text-black"
				        ></textarea>
				        </div>
				    </div>
				    <div class="w-full pt-3">
				        <button type="submit" class="w-48  rounded-md border border-black px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-blue-500 hover:text-white text-xl cursor-pointer">
				        Send
				        </button>
				    </div>
				 </form>
			</div>
		</div>
	</div>
<?php include"layout_frontend/footer.php"?>