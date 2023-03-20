<?php 
  session_start();
  include"../../layout/header.php"; 
  include "../../controllers/mobil_controller.php";
?>

<h2>Form Data Mobil</h2>
<hr/>
<!-- Content -->

<form action="index.php?aksi=tambah" method="POST" enctype="multipart/form-data">
  <div class="w-full flex">
    <div class="w-full rounded-md shadow-md">
      <div class="pl-2 pt-3 flex">
        <div class="w-2/6">
          <p class="pl-1 ">Kursi</p>
          <input type="text" name="kursi" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1 ">Kode Mobil</p>
          <input type="text" name="kode_mobil" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Nama Mobil</p>
          <input type="text" name="nama_mobil" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik..."><br/>
          <select name="id_harga">
            <option value="">Pilih Harga</option>
            <?php 
              if ($data['harga'] && count($data['harga']) > 0) {
              foreach ($data['harga'] as $row) { ?>
              <option value="<?php echo $row['id_harga'];?>">Rp <?php echo number_format($row['harga']);?></option>
              <?php } }
            ?>
          </select>
          <select name="id_merek">
            <option value="">Pilih Merek</option>
            <?php 
              if ($data['merek'] && count($data['merek']) > 0) {
                foreach ($data['merek'] as $row) {
            ?>
              <option value="<?php echo $row['id_merek'];?>"><?php echo $row['merek']; ?></option>
            <?php 
                }
              }

            ?>
          </select>
        </div>
        <div class="w-2/6">
          <p class="pl-1">No mesin</p>
          <input type="text" name="no_mesin" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Jenis mobil</p>
          <input type="text" name="jenis_mobil" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Description</p>
          <input type="text" name="description" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <p class="pl-1">Tambah Foto Utama</p>
          <input type="file" name="foto_utama" class="bg-gray-300 pl-2 w-64 mb-3 rounded-md" placeholder="ketik...">
          <div class="w-1/2 flex py-6">
            <button type="submit" class="bg-blue-500 w-1/2 h-6 mx-1 rounded-lg">Tambah</button>
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
