<?php 
  session_start();
  include "../../controllers/harga_controller.php";
  include"../../layout/header.php";
  $aksi_form = ($aksi=='edit') ? 'update' : 'tambah';
 ?>

<h2>Form Data Harga</h2>
<hr/>
  <!-- Content -->
<form action="index.php?aksi=<?php echo $aksi_form;?>" method="POST">
  <?php if ($aksi== 'edit'){ ?>
    <input type="hidden" name="id" value="<?php echo @$data['detail']['id_harga'];?>">
  <?php } ?>
  <div class="w-full flex">
    <div class="w-full h-40  rounded-md shadow-md">
      <div class="pl-2 pt-3 flex">
        <div class="w-2/6">
          <p class="pl-1">Harga</p>
          <input value="<?php echo @$data['detail']['harga'];?>" type="text" name="harga" class="bg-gray-300 pl-2 w-64 rounded-md" placeholder="ketik...">
        </div>
        <div class="w-2/6">
          <p class="pl-1">Durasi</p>
          <input value="<?php echo @$data['detail']['durasi'];?>" type="text" name="durasi" class="bg-gray-300 pl-2 w-64 rounded-md" placeholder="ketik...">
          <div class="w-1/2 flex py-6">
            <button type="submit" class="bg-blue-500 w-1/2 h-6 mx-1 rounded-lg"><?php echo ($aksi_form=='update') ? 'edit' : 'tambah';?></button>
            <button type="reset" class="bg-red-500 w-1/2 h-6 mx-1 rounded-lg">Reset</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-500 w-28 h-6 mt-2 mx-1 rounded-lg">
    <a href="index.php"> 
      <i class="fa fa-angle-double-left fa-sm mx-2"></i>Kembali
    </a>
  </div>
</form>
<?php include"../../layout/footer.php"; ?>