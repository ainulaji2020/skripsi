<?php 
	session_start();
	include "../../controllers/gambar_controller.php";
	include "../../layout/header.php";
	$aksi_form = ($aksi=='edit') ? 'update' : 'tambah';
?>
<!-- coneten -->
<h2>Form Gambar</h2>
<hr/>

<form action="index.php?aksi=<?php echo $aksi_form;?>" method="POST" enctype="multipart/form-data">
	<?php if ($aksi== 'edit'){ ?>
		<input type="hidden" name="id" value="<?php echo @$data['detail']['id_gambar'];?>">
	<?php } ?>
	<div class="w-1/4 h-40  rounded-md shadow-md">
		<p class="pl-2 pt-2 pb-3">Nama Gambar</p>
		<div class="px-2">
			<input value="<?php echo @$data['detail']['gambar'];?>" type="file" name="image" class="bg-gray-300 w-full pl-2" placeholder="ketik...">
		</div>
		<div class="flex py-8">
			<button type="submit" class="bg-green-500 w-1/2 h-6 mx-1 rounded-lg"><?php echo ($aksi_form=='update') ? 'edit' : 'tambah';?></button>
			<button type="reset" class="bg-red-500 w-1/2 h-6 mx-1 rounded-lg">Reset</button>
		</div>
	</div>
	<div class="bg-gray-500 w-28 h-6 mt-2 mx-1 rounded-lg">
		<a href="index.php"> 
			<i class="fa fa-angle-double-left fa-sm mx-2"></i>Kembali
		</a>
	</div>
</form>

<!-- footer -->
<?php include "../../layout/footer.php";?>
