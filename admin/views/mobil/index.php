<?php 
  session_start();
  include "../../controllers/mobil_controller.php";
  // echo "<pre>";
  // echo print_r($data['mobil']);
  // echo "</pre>";
  // die();
?>
<?php include "../../layout/header.php"; ?>
  <div class="w3-container">
    <h2>Data mobil</h2>
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
                <td class="px-5">Kursi</td> 
                <td class="px-5">Kode Mobil</td> 
                <td class="px-5">Nama Mobil</td> 
                <td class="px-5">No Mesin</td> 
                <td class="px-5">Jenis Mobil</td> 
                <td class="">Description</td>
                <td class="text-center" style="width: 100px;">Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                if ($data['mobil'] && count($data['mobil']) > 0) {
                  foreach ($data['mobil'] as $row) {
              ?>
                <tr class="text-xs p-5">
                  <td class="py-2 text-center" style="width: 40px;"><?php echo $no;?></td>
                  <td class="py-2 px-5"><?php echo $row['kursi']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['kode_mobil']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['nama_mobil']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['no_mesin']; ?></td>
                  <td class="py-2 px-5"><?php echo $row['jenis_mobil']; ?></td>
                  <td>
                  <?php 
                    if (strlen($row['description']) > 50) {
                      echo substr($row['description'], 0, 50).'...';
                    }else{
                      echo $row['description'];
                    }
                  ?>   
                  </td>
                  <td class="py-2" style="width: 100px;">
                    <div class="w-full flex justify-center items-start">
                      <div class="w-1/3 px-1">
                        <a href="form.php" class="px-2 py-1 bg-blue-400 rounded">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </div>
                      <div class="w-1/3 px-1">
                        <a href="<?php echo $baseUrl.'views/mobil_gallery/index.php?id='.$row["id_mobil"];?>" class="px-2 py-1 bg-yellow-400 rounded">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                      <div class="w-1/3 px-1">
                        <a href="?aksi=delete&id=<?php echo $row['id_mobil'];?>" class="px-2 py-1 bg-red-600 rounded">
                          <i class="fa fa-trash"></i>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php $no++ ; } } ?>
              <?php if ($data['mobil'] && count($data['mobil']) < 1) { ?>
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