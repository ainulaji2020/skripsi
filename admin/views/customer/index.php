<?php 
  session_start();
  include "../../controllers/customer_controller.php";
  // echo "<pre>";
  // echo print_r($data['mobil']);
  // echo "</pre>";
  // die();
?>
<?php include "../../layout/header.php";?>
  <div class="w3-container">
    <h2>Data Customer</h2>
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
                <td class="px-5">No Ktp</td> 
                <td class="px-5">Nama Customer</td> 
                <td class="px-5">No-Telp</td> 
                <td class="px-5">Tgl-Lahir</td> 
                <td class="px-5">Pekerjaan</td> 
                <td class="px-5">Status</td> 
                <td class="px-5">Foto-KTP</td> 
                <td class="px-5">Foto-KK</td> 
                <td class="px-5">Alamat</td> 
                <td class="text-center" style="width: 100px;">Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                if (isset($data['customer']) && count($data['customer']) > 0) {
                  foreach ($data['customer'] as $row) {
              ?>
                <tr class="text-xs p-5">
                  <td class="py-2 text-center" style="width: 40px;"><?php echo $no;?></td>
                  <td class="py-2 px-5"><?php echo $row['no_ktp']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['nama_customer']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['no_telephone']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['tgl_lahir']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['pekerjaan']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['status']; ?></td>
                  <td class="py-2 px-5"><img src="../../assets/images/ktp/<?php echo $row['foto_ktp'] ?>"></td>
                  <td class="py-2 px-5"><img src="../../assets/images/kk/<?php echo $row['foto_kk'] ?>"></td>
                  <td class="py-2 px-5"><?php echo $row['alamat_tempat_tinggal']; ?></td>
                  <td class="py-2" style="width: 100px;">
                    <div class="w-full flex justify-center items-start">
                      <div class="w-1/3 px-1">
                        <a href="form.php?aksi=edit&id=<?php echo $row['id_customer']?>" class="px-2 py-1 bg-blue-400 rounded">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </div>
                      <div class="w-1/3 px-1">
                        <a href="?aksi=delete&id=<?php echo $row['id_customer'];?>" class="px-2 py-1 bg-red-600 rounded">
                          <i class="fa fa-trash"></i>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php $no++ ; } } ?>
              <?php if (isset($data['customer']) && count($data['customer']) < 1) { ?>
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