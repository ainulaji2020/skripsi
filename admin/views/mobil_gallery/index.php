<?php 
  session_start();
  include "../../controllers/mobil_gallery_controller.php"; 
  // echo "<pre>";
  // echo print_r($data['mobil_gallery']);
  // echo "</pre>";
  // die();
?>
<?php include "../../layout/header.php"; ?>
	<div class="w3-container">
    <h2>Data Gallery</h2>
    <hr/>
      <!-- Content -->
      <div class="px-3 mb-2">
        <i class="fa fa-arrow-left text-blue-400 py-1 pl-3" aria-hidden="true"></i>
        <a class="text-blue-400" href="<?php echo $baseUrl.'views/mobil';?>">Kembali</a>
      </div>
      <div class="w-full flex flex-wrap">
        <div class="w-3/4 px-3">
          <div class="pl-2 flex flex-row">
            <div class="w-1/2 pr-3">
              <?php if($data['default_image_mobil']['image'] != ''){ ?>
              <img class="w-full" src="<?php echo $baseUrl.'assets/images/mobil/'.$data['default_image_mobil']['image'];?>">
              <?php } else { ?>
                  <div class="w-full h-32 bg-blue-500 text-white flex justify-center items-center text-center">Foto tidak ada <br/>Silahkan Upload Foto</div> 
              <?php } ?>
            </div>
            <div class="flex-1 px-3">
              <p>
                <b>Nama Mobil</b><br />
                <?php echo $data['detail_mobil']['nama_mobil'];?>
              </p>
              <p class="pt-2">
                <b>Nama Merek</b><br />
                <?php echo $data['detail_mobil']['merek'];?>
              </p>
              <p class="pt-2">
                <b>Kursi</b><br />
                <?php echo $data['detail_mobil']['kursi'];?>
              </p>
              <p class="pt-2">
                <b>No Mesin</b><br />
                <?php echo $data['detail_mobil']['no_mesin'];?>
              </p>
              <p class="pt-2 pb-5">
                <b>Description</b><br />
                <?php echo $data['detail_mobil']['description'];?>
              </p>
            </div>
          </div>
        </div>
        <div class="w-full flex">
          <div class="w-40 text-blue-400"><a href="form.php?aksi=tambah"> Tambah image</a></div>
          <?php 
            if ($data['mobil_gallery'] && count($data['mobil_gallery']) > 0) {
               foreach($data['mobil_gallery'] as $row){
          ?>
              <div class="w-full px-2">
                <div class="w-full px-1 flex py-1">
                  <div class="bg-blue-500 w-10 mx-1 px-3 rounded-md">
                    <a href="form.php?aksi=edit&id=<?php echo $row['id_mobil']?>"> 
                      <i class="fa fa-pencil"></i>
                    </a>
                  </div>
                  <div class="bg-red-500 w-10 mx-1 px-3 rounded-md">
                    <a href="?aksi=delete&id=<?php echo $row['id_mobil'];?>">
                      <i class="fa fa-trash"></i>
                    </a>
                  </div>
                </div>
                <img class="w-full rounded-md" src="<?php echo $baseUrl.'assets/images/mobil/'.$row['image'];?>">
              </div>
          <?php } } ?>
        </div>
      </div>
    </div>

<?php include "../../layout/footer.php"; ?>