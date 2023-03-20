<?php $nav = 'rental_mobil';?>

<?php 
	session_start();
	// echo $_GET['id'];

	include "admin/models/mobil_model.php";
	include "admin/models/mobil_gallery_model.php";
	$mobilModel 		= new mobilModel();
	$mobil_galleryModel = new mobil_galleryModel();

	$detailMobil 				= $mobilModel->detail($_GET['id']);
	$detail_galleryMobil 		= $mobil_galleryModel->detail($_GET['id']);
	$detail_galleryMobilDefault = $mobil_galleryModel->detailDefault($_GET['id']);
	// print_r($detailMobil);

	$data['detailMobil'] 				= mysqli_fetch_array($detailMobil);
	$data['detailGalleryMobil'] 		= $detail_galleryMobil;
	$data['detail_galleryMobilDefault'] = $detail_galleryMobilDefault;
	// echo '<pre>';
	// print_r($data['detailGalleryMobil']);
	// echo '</pre>';
	// die();
	// print_r($detailMobil);
	// die();
?>

<!-- Header -->
<?php include"layout_frontend/header.php"?>
<!-- content -->
	<div class="w-full flex mx-auto">
		<div class="w-5/12 ml-16 flex flex-wrap">
			<div class="w-full h-96 mx-2 mt-2 relative">
				<div class="w-full h-full absolute rounded-md shadow-lg overflow-hidden">
					<img class="w-full h-full object-cover" src="admin/assets/images/mobil/<?php echo $data['detail_galleryMobilDefault']['image']?>"/>
				</div>
			</div>
			<!-- //detail imgae// -->
			<div class="w-full flex mx-8 mb-6">
				<?php $no = 1;
					 if (isset($data['detailGalleryMobil']) && count($data['detailGalleryMobil']) > 0) {
              			foreach ($data['detailGalleryMobil'] as $row) {
				?>
					<div class="w-2/5 h-40 px-2 py-2 mx-2">
						<img class="rounded-lg shadow-md w-full h-full object-cover" src="admin/assets/images/mobil/<?php echo $row['image']?>" />
					</div>
				<?php $no++; } } ?>
			</div>
		</div>
		<div class="w-7/12">
			<div class="text-3xl px-4 font-serif font-bold py-4">Sewa <?php echo $data['detailMobil']['nama_mobil'];?></div>
			<p class="mx-4">Harga: Rp<?php echo number_format($data['detailMobil']['harga']);?></p>
			<div class="w-72 px-4 mx-4 my-4 flex justify-between rounded-md bg-gray-200">
				Tanggal :
				<input class="rounded-md bg-gray-200" type="date" name="tanggal">
			</div>
			<div class="px-4 mx-4 flex flex-row items-center w-72 bg-gray-200 rounded-md">
				<button onclick="kurang()" class="py-2">
					<i class="fa fa-minus"></i>
				</button> 
				<div class="flex-1 flex justify-center items-center px-5">
					<input class="rounded-md w-5 text-right bg-transparent text-center" type="text" name="hari" id="tambah1" value="1" />
					<span class="inline-block pl-4">Hari</span>
				</div>
				<button onclick="tambah()" class="py-2">
					<i class="fa fa-plus"></i>
				</button>
			</div>
			<p class="pl-6 py-4"><b>Kapasitas</b></p>
			<button class="w-16 ml-4 rounded-md text-center transform< <?php if($data['detailMobil']['kursi'] == '2'){echo 'bg-blue-600 text-white';}?>">2 orang</button>
			<button class="w-16 ml-4 rounded-md text-center transform< <?php if($data['detailMobil']['kursi'] == '4'){echo 'bg-blue-600 text-white';}?>">4 orang</button>
			<button class="w-16 ml-4 rounded-md text-center transform< <?php if($data['detailMobil']['kursi'] == '6'){echo 'bg-blue-600 text-white';}?>">6 orang</button>
			<button class="w-16 ml-4 rounded-md text-center transform< <?php if($data['detailMobil']['kursi'] == '8'){echo 'bg-blue-600 text-white';}?>">8 orang</button>
			<p class="mx-4 my-4">Keterangan :<br/><?php echo $data['detailMobil']['description'];?></p>
				<a href="booking.php" type="submit" class="mx-4 w-40 border-solid border-2 border-black rounded-md font-semibold transition duration-500 ease-in-out  hover:bg-blue-600 transform  hover:scale-110 "> 
					<p>Pesan Sekarang</p>
				</a>
		</div>
	</div>


<!-- footer -->
<?php include"layout_frontend/footer.php"?>