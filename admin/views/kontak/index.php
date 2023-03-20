<?php 
  session_start();
  include "../../controllers/kontak_controller.php"; 
  // echo "<pre>";
  // echo print_r($data['mobil']);
  // echo "</pre>";
  // die();
?>
<?php include "../../layout/header.php"; ?>
	<div class="w3-container">
    <h2>Data Kontak</h2>
    <hr/>
      <!-- Content -->
      <div class="w-full flex">
        <div class="w-full mx-3">
          <table class="w-full ">
            <thead>
              <tr class="text-sm border-2 font-bold">
                <td class="text-center" style="width: 40px;">No</td>
                <td class="px-5">Nama User</td> 
                <td class="px-5">Email User</td> 
                <td class="px-5">Message</td>
                <td class="text-center" style="width: 100px;">Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                if ($data['kontak'] && count($data['kontak']) > 0) {
                  foreach ($data['kontak'] as $row) {
              ?>
                <tr class="text-xs p-5">
                  <td class="py-2 text-center" style="width: 40px;"><?php echo $no;?></td>
                  <td class="py-2 px-5"><?php echo $row['nama_kontak']?></td>
                  <td class="py-2 px-5"><?php echo $row['email_kontak']?></td>
                  <td class="py-2 px-5"><?php echo $row['alamat_kontak']?></td>
                  <td class="py-2" style="width: 100px;">
                    <div class="w-full flex justify-center items-start">
                      <div class="w-1/3 px-1">
                        <a href="?aksi=delete&id=<?php echo $row['id_kontak'];?>" class="px-2 py-1 bg-red-600 rounded">
                          <i class="fa fa-trash"></i>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php $no++ ; } } ?>
              <?php if ($data['kontak'] && count($data['kontak']) < 1) { ?>
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