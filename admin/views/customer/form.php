<?php 
  session_start();
  include "../../controllers/customer_controller.php";
  include "../../layout/header.php";
  $aksi_form = ($aksi=='edit') ? 'update' : 'tambah';
?>

<h2>Form Customer</h2>
<hr/>
<form action="index.php?aksi=<?php echo $aksi_form;?>" method="POST" enctype="multipart/form-data">
  <?php if ($aksi== 'edit'){ ?>
    <input type="hidden" name="id" value="<?php echo @$data['detail']['id_customer'];?>">
  <?php } ?>
  <div class="w-full flex">
    <div class="w-full rounded-md shadow-md">
      <div class="pl-2 pt-3 flex">
        <div class="w-2/6">
          <p class="pl-1">No KTP (Kartu Tanda Penduduk)</p>
          <input value="<?php echo @$data['detail']['no_ktp'];?>" type="text" name="no_ktp" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Nama Customer</p>
          <input value="<?php echo @$data['detail']['nama_customer'];?>" type="text" name="nama_customer" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">No Telphone</p>
          <input value="<?php echo @$data['detail']['no_telephone'];?>" type="text" name="no_telp" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
        </div>

        <div class="w-2/6">
          <p class="pl-1 ">Tanggal Lahir</p>
          <input value="<?php echo @$data['detail']['tgl_lahir'];?>" type="date" name="tgl_lahir" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Pekerjaan</p>
          <input value="<?php echo @$data['detail']['pekerjaan'];?>" type="text" name="pekerjaan" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Status</p>
          <input value="<?php echo @$data['detail']['status'];?>" type="text" name="status" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
        </div>
        
        <div class="w-2/6">
          <p class="pl-1">Foto KTP (katru Tanda Penduduk)</p>
          <input value="<?php echo @$data['detail']['foto_ktp'];?>" type="file" name="foto_ktp" class=" pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Tanggal Kartu Keluarga</p>
          <input value="<?php echo @$data['detail']['foto_kk'];?>" type="file" name="foto_kk" class=" pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Alamat</p>
          <textarea name="alamat" class="w-3/4 pl-2 border border-solid border-indigo-800 rounded-md" placeholder="Isi alamat ..."><?php echo @$data['detail']['alamat_tempat_tinggal'];?></textarea>
          <div class="w-1/2 flex py-3 mx-3">
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

<?php include "../../layout/footer.php";?>