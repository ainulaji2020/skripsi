<?php $nav = 'rental_mobil';?>

<?php 
	session_start();
	include "admin/models/mobil_model.php";
	$gambarmobil 			= new mobilModel();
	$datagambar 			= $gambarmobil->getMobilImage();
	$data['detail_mobil'] 	= $datagambar;
	if(@$_GET['alt'] == 1)
	  {
	  	echo "<script>alert('Terima Kasih Atas Pemesanan Anda Dirental Kami , Silahakan tunggu konfirmasi dari pihak rental')</script>"; 
	  }
?>

<!-- header -->
<?php include"layout_frontend/header.php";?>

<!-- content -->
<div class="w-full h-24 bg-gray-800 text-center text-gray-200 py-6 text-4xl font-arial shadow-lg">
		Datar Rental Mobil Keluarga
</div>
	<p class="py-6 text-center text-xl">Silahkan Pilih Mobil-Mobil Berkualitas Yang Kami Tawarkan Kepada Anda.<br/> Silahkan Tanyakan Harga.<br/><p class="text-3xl text-center font-mono">CARA MEMESAN</p> 
	<div class="text-blue-500 text-center">Jika Anda Ingin Memesan Klik Menu Booking Terlebih dahulu Isi <ins>DATA</ins> dan jika Sudah Anda Pergi ke bagian Detail Lalu Klik Menu <ins>PESAN</ins></div></p>
<div class="w-full flex flex-wrap">
	<?php $no = 1;
            if (isset($data['detail_mobil']) && count($data['detail_mobil']) > 0) {
              foreach ($data['detail_mobil'] as $row) {
       		?>
	<div class="w-4/12 text-center px-4 pt-4 text-2xl font-mono mb-10">
		<div class="w-full flex flex-wrap h-auto rounded-md">
			<div class="w-full h-52 mb-10 relative">
				<div class="w-full h-full absolute">
					<img class="w-full h-full object-cover rounded-md" src="admin/assets/images/mobil/<?php echo $row['image'] ?>" />
				</div>
			</div>
			<p class="mx-auto"><span class="text-yellow-400"><?php echo $row['nama_mobil']?></span></p>
			<button class="mx-auto px-6 pb-8 border-b-8">
				<a class="rounded-md border border-black px-4  transition duration-50 focus:outline-none font-semibold hover:bg-blue-500 hover:text-white text-xl cursor-pointer" 
				href="booking.php">Booking</a>
				<a class="rounded-md border border-black px-4  transition duration-50 focus:outline-none font-semibold hover:bg-blue-500 hover:text-white text-xl cursor-pointer" href="detail_mobil.php?id=<?php echo $row['id_mobil']?>">Detail</a>
			</button>
		</div>
	</div>
	<?php $no++ ; } } ?>
</div>

<!-- footer -->
<?php include"layout_frontend/footer.php";?>