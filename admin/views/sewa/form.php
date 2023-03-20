<?php 
  session_start();
  include "../../controllers/sewa_controller.php";
  include"../../layout/header.php";
  $aksi_form = ($aksi=='edit') ? 'update' : 'tambah';
 ?>

<h2>Form Data Sewa</h2>
<hr/>

  <!-- Content -->
<form action="index.php?aksi=<?php echo $aksi_form;?>" method="POST">
  <?php if ($aksi== 'edit'){ ?>
    <input type="hidden" name="id" value="<?php echo @$data['detail']['id_sewa'];?>">
  <?php } ?>
  <div class="w-full flex">
    <div class="w-full  rounded-md shadow-md">
      <div class="pl-2 pt-3 flex">
        <div class="w-2/6">
          <p class="pl-1 ">No Sewa</p>
          <input type="text" value="<?php echo @$data['detail']['no_sewa'];?>" name="no_sewa" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1 ">Tanggal Sewa</p>
          <input type="text" value="<?php echo @$data['detail']['tgl_sewa'];?>" name="tanggal_sewa" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1 ">Tanggal kembalil</p>
          <input type="date" value="<?php echo @$data['detail']['tanggal_kembali'];?>" name="tanggal_kembali" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
        </div>
        <div class="w-2/6">
          <p class="pl-1 ">Biaya Sewa</p>
          <input type="text" value="<?php echo @$data['detail']['biaya_sewa'];?>" name="biaya_sewa" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1 ">Denda Sewa</p>
          <input type="text" value="<?php echo @$data['detail']['denda_sewa'];?>" name="denda_sewa" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Status sewa</p>
          <input type="text" value="<?php echo @$data['detail']['status_sewa'];?>" name="status_sewa" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
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