<?php session_start();?>
<?php include "../layout/header.php"; ?>

<h2>APLIKASI RENTAL MOBIL</h2>
<hr/>
<p class="pb-4 pl-2"><b>Selamat Datang ADMIN</b></p>
<div class="flex">
  <div class="bg-blue-500 w-1/4 flex flex-wrap mx-1 rounded-md">
    <div class="w-1/2 pl-2 py-4">
      <p class="text-lg font-mono">DATA AKUN</p>
      <p class="text-xl font-mono">1 Akun</p>
    </div>
    <div class="w-1/2 pl-16 pt-5 ">
      <i style="font-size:35px;" class="fa fa-user"></i>
    </div> 
  </div>
  <div class="bg-green-500 w-1/4 flex flex-wrap mx-1 rounded-md">
    <div class="w-1/2 pl-2 py-4">
      <p class="text-lg font-mono">DATA PENYEWAAN</p>
      <p class="text-xl font-mono">lihat</p>
    </div>
    <div class="w-1/2 pl-16 pt-5">
      <i style="font-size:35px;" class="fa fa-users"></i>
    </div> 
  </div>
</div>
<!-- Nama Admin -->
<div class="mt-4">
  <div class="bg-gray-200 w-3/4">
    <p class="pl-4">Akun Yang Sedang Login</p>
    <div class="bg-gray-300 flex py-4 ">
      <!-- foto admin -->
      <div class="w-1/3">
        <div class="px-4">
          <img class="rounded" src="../assets/images/images_admin/admin-logo.png" />
        </div>
      </div>
      <!-- Nama Admin -->
      <div class="w-2/3 ">
        <div class="flex flex-row py-1"> 
          <div class="w-1/4">Nama</div>
          <div class="flex-1">: Admin@gmail.com</div>
        </div>

        <div class="flex flex-row py-1">
          <div class="w-1/4">Tanggal</div>
          <div class="flex-1">:10-11-2021</div>
        </div>
        <div class="flex flex-row py-1">
          <div class="w-1/4">Server</div>
          <div class="flex-1">: Localhost</div>
         </div>
      </div>
    </div>
  </div>
</div>

<?php include "../layout/footer.php"; ?>