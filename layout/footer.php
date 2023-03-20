<?php 
  include "../../koneksi.php";

  var_dump($conn);

  $table_rental = mysqli_query($conn,"SELECT * FROM tb_rental");

  $data_rental = mysqli_fetch_array($table_rental);

?>

<nav id="footer" class="bg-gray-200" class="footer-shadow">
    <!-- start container -->
  <div class="container mx-auto pt-10 pb-4 mt-20">
    <div class="flex flex-wrap overflow-hidden sm:-mx-1 md:-mx-px lg:-mx-2 xl:-mx-2">
        <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
          <!-- Column 1 Content -->
        <img style="max-width: 100%; height:110px; border-radius: 3px; margin-left: 80px; margin-right: 80px;" class="" src="../images/Lm-logo.jpg" alt="Logo">
        </div>

        <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6 text-black">
                <!-- Column 2 Content -->
           <i class="fa fa-whatsapp fa-3x text-gray-700 pb-3 pl-16 "><span class="font-serif pl-3 text-black">Call</span></i>
           <p class="pl-16"><b><?php echo $data_rental['no_telp']; ?></b></p>
           <!-- <p class="pl-16"><b>021 9063 5510</b></p>  -->
        </div>

        <div class="w-full overflow-hidden sm:my-1 sm:px-5 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:w-1/4 xl:my-2 pl-72 xl:w-1/4 pb-6">
          <!-- Column 3 Content -->
          <i class="fa fa-envelope fa-3x text-gray-700 pb-3 pl-10"><span class="font-serif pl-3 text-black">Mail</span></i>
          <p class="pl-10"><b><?php echo $data_rental['email']; ?></b></p>
          <!-- <p class="pl-10"><b>Wahyudi123@gmail.com</b></p> -->
        </div>

        <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
          <!-- Column 4 Content -->
          <i class="fa fa-map-marker fa-3x text-gray-700 pb-3 pl-10"><span class="font-serif pl-3 text-black">Location</span></i>
          <p class="pl-12"><b><?php echo $data_rental['alamat']; ?></b></p>
        </div>
   </div>
        <!-- Start footer bottom -->
        <div class="pt-4 md:flex md:items-center md:justify-center " style="border-top:1px solid white">
        <b>@ 2021 Laksana Mandiri Motor</b>
        </div>
        <!-- end container -->
      </div>
</nav>