<?php 
  session_start();
  include "../../controllers/merk_controller.php";
?>
<?php include "../../layout/header.php"; ?>
	<div class="w3-container">
    <h2>Data Merek</h2>
    <hr/>
      <!-- Content -->
      <div class="px-3 mb-2">
        <i class="fa fa-plus text-blue-400 py-1 pl-3" aria-hidden="true"></i>
        <a class="text-blue-400" href="form.php">Tambah data</a>
      </div>
      <div class="w-full flex">
        <div class="w-full mx-3">
          <table class="w-full ">
            <thead>
              <tr class="text-sm border-2 font-bold">
                <td class="text-center" style="width: 40px;">No</td>
                <td class="px-5">Merk</td>
                <td class="text-center" style="width: 100px;">Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                if (isset($data['merek']) && count($data['merek']) > 0) {
                  foreach ($data['merek'] as $row) {
              ?>
                <tr class="text-xs p-5">
                  <td class="py-2 text-center" style="width: 40px;"><?php echo $no;?></td>
                  <td class="py-2 px-5"><?php echo $row['merek']; ?></td>
                  <td class="py-2" style="width: 100px;">
                    <div class="w-full flex justify-center items-start">
                      <div class="w-1/3 px-1">
                        <a href="form.php?aksi=edit&id=<?php echo $row['id_merek']?>" class="px-2 py-1 bg-blue-400 rounded">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </div>
                      <div class="w-1/3 px-1">
                        <a href="?aksi=delete&id=<?php echo $row['id_merek'];?>" class="px-2 py-1 bg-red-600 rounded">
                          <i class="fa fa-trash"></i>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php $no++ ; } } ?>
              <?php if (isset($data['merek']) && count($data['merek']) < 1) { ?>
                <tr class="text-center">
                  <td class="py-5" colspan="100%">Tidak ada data yang ditampilkan</td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

<?php if(isset($modal_message)){ ?>
   <?php include "../../layout/modal.php"; ?>
<?php } ?>

<?php include "../../layout/footer.php"; ?>