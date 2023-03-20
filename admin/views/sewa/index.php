<?php 
  session_start();
  include "../../controllers/sewa_controller.php";
  // echo "<pre>";
  // echo print_r($data['mobil']);
  // echo "</pre>";
  // die();
?>
<?php include "../../layout/header.php";?>
<form action="" method="POST">
  <div class="w3-container">
    <h2>Data sewa</h2>
    <hr/>
      <!-- Content -->
      <div class="px-3 mb-2">
        <i class="fa fa-plus text-blue-400 py-1 pl-3" aria-hidden="true"></i>
        <a class="text-blue-400" href="form.php">Tambah data</a>
      </div>
      <div class="w-full px-2 my-4">
        <table style="width: 100%;">
        <thead>
         <tr class="text-sm border-2">
           <th>No</th>
           <th>no Sewa</th> 
           <th>Tanggal Sewa</th> 
           <th>Tanggal kembali</th> 
           <th>Biaya Sewa</th> 
           <th>Denda sewa</th> 
           <th>Status sewa</th>
           <th style="width: 100px;">Aksi</th>
         </tr>
        </thead>
        <tbody>
          <?php $no = 1;
                if (isset($data['sewa']) && count($data['sewa']) > 0) {
                  foreach ($data['sewa'] as $row) {
          ?>
            <tr class="text-xs text-center p-5">
              <td style="width: 50px;"><?php echo $no;?></td>
              <td><?php echo $row['no_sewa']; ?></td>
              <td><?php echo $row['tgl_sewa']; ?></td>
              <td><?php echo $row['tgl_kembali']; ?></td>
              <td><?php echo $row['biaya_sewa']; ?></td>
              <td><?php echo $row['denda_sewa']; ?></td>
              <td><?php echo $row['status_sewa']; ?></td>
              <td class="py-2">
                <div class="w-full flex justify-center items-start">
                  <div class="w-1/3 px-2">
                    <a href="form.php?aksi=edit&id=<?php echo $row['id_sewa']?>" class="px-2 py-1 bg-blue-400 rounded">
                      <i class="fa fa-pencil"></i>
                    </a>
                  </div>
                
                  <div class="w-1/3 px-2">
                    <a href="?aksi=delete&id=<?php echo $row['id_sewa'];?>" class="px-2 py-1 bg-red-600 rounded">
                      <i class="fa fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
         <?php $no++ ; } } ?>
         <?php if (isset($data['sewa']) && count($data['sewa']) < 1) { ?>
            <tr class="text-center">
              <td class="py-5" colspan="100%">Tidak ada data yang ditampilkan</td>
            </tr>
          <?php } ?>
        </tbody>
     </table>
      </div>
    </div>
</form>

<?php if(isset($modal_message)){ ?>
   <?php include "../../layout/modal.php"; ?>
<?php } ?>
<?php include "../../layout/footer.php";?>