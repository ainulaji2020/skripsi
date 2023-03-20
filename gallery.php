
<?php $nav = 'gallery';?>
<!-- header -->
<?php 
	session_start();
	include "admin/models/gambar_model.php";
	$gambarModel = new gambarModel();

	$datagambar 	= $gambarModel->get();
	$data['gambar'] = $datagambar;
?>

<?php include"layout_frontend/header.php"?>
<!-- content -->
	<div class="w-full h-24 bg-gray-800 text-center text-gray-200 py-6 text-4xl font-arial shadow-lg">
		<div>Galery Kami</div>
	</div>
	<div class="container mx-auto flex flex-wrap ">
		<?php $no = 1;
            if (isset($data['gambar']) && count($data['gambar']) > 0) {
              foreach ($data['gambar'] as $row) {
       		?>
       			<div class="px-4 py-4 w-2/6 ">
       				<img class="w-full rounded-lg h-80" src="admin/assets/images/gallery/<?php echo $row['gambar'] ?>">
   				</div>
        <?php $no++ ; } } ?>
	</div>

<!-- footer -->
<?php include"layout_frontend/footer.php"?>