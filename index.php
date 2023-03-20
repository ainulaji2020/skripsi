<?php 
  $nav = 'home';
  include"layout_frontend/header.php";
?>
 
  <!-- Content -->
	 <div class="container mx-auto text-center">
	 	<h1 class="text-4xl mt-14 font-serif">RENTAL LAKSANA MANDIRI MOTOR</h1>
	 	<div class="sliderAx h-auto wrap flex-wrap mt-10 mb-5">
	        <div id="slider-1" class="container mx-auto">
	          <div class="bg-cover bg-center text-white relative flex flex-wrap justify-center rounded-lg overflow-hidden" style="height: 500px;">
	              <img src="assets/images/civic-header.jpg" class="w-full h-full object-cover left-0 absolute z-10" />
	              <!-- <div class="w-full inline-block relative z-20 inset-0 m-auto">
	              </div> -->  
	          </div> <!-- container -->
	          <br>  
	        </div>
          <!-- Slider -->
        <div id="slider-2" class="container mx-auto">
          <div class="bg-cover bg-center text-white relative flex flex-wrap justify-center rounded-lg overflow-hidden" style="height: 500px;">
          <img src="assets/images/honda-crv.jpg" class="w-full h-full object-cover left-0 absolute z-10" />
            <div class="w-full inline-block relative z-20 inset-0 m-auto">
               <!--  -->
            </div>  
          </div>
          <br>
        </div>
      </div>
      <div class="flex justify-between w-12 mx-auto pb-2 mb-10">
          <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
          <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
      </div>
      <button class="bg-gray-200 inline-block px-2 rounded">Mengapa Memilih <b>Kami</b></button>
        <h1 class="text-4xl font-arial pt-5 pb-5">Banyak Kelebihan Yang Anda Dapatkan</h1>
        <p class="text-gray-500 pt-5 pb-5">Mobil berkualitas  untuk disewa bersama supir dengan harga terbaik</p>

      <div class="container">
        <div class="flex flex-wrap px-4 my-4">
          <div class="w-1/4 px-3">
              <div class="rounded-lg border-solid border-4 border-gray-500 px-5">
                <div class="py-3 h-full">
                  <div class="pt-2">
                  	<i class="fa fa-money fa-4x"></i>
                  </div>
                  <h1 class="font-mono text-lg pt-2 pb-3"><b>Komitmen Harga Terbaik</b></h1>
                  <p class="font-mono leading-tight text-sm pb-2">Memberikan Anda harga terbaik dan kompetitif</p>
                </div>
              </div>
          </div>

         <div class="w-1/4 px-3">
              <div class="rounded-lg border-solid border-4 border-gray-500 px-5">
                <div class="py-3 h-full">
                  <div class="pt-2">
                  	<i class="fa fa-road fa-4x"></i>
                  </div>
                  <h1 class="font-mono text-lg pt-2 pb-3"><b>Batas Jarak</b></h1>
                  <p class="font-mono leading-tight text-sm pb-2">Kemanapus Anda Pergi Kami Siap Mengantar</p>
                </div>
              </div>
         </div>

          <div class="w-1/4 px-3">
              <div class="rounded-lg border-solid border-4 border-gray-500 px-5">
                <div class="py-3 h-full">
                  <div class="pt-2">
                  	<i class="fa fa-cogs fa-4x fa-fw"></i>
                  </div>
                  <h1 class="font-mono text-lg pt-2 pb-3"><b>Komitmen Service</b></h1>
                  <p class="font-mono leading-tight text-sm pb-2">Memberikan Kenyamanan untuk customer</p>
                </div>
              </div>
          </div>

          <div class="w-1/4 px-3">
              <div class="rounded-lg border-solid border-4 border-gray-500 px-5">
                <div class="py-3 h-full">
                  <div class="pt-2">
                  	<i class="fa fa-check-square fa-4x"></i>
                  </div>
                  <h1 class="font-mono text-lg pt-2 pb-3"><b>Bekerkendara Nyaman</b></h1>
                  <p class="font-mono leading-tight text-sm pb-2">Nikmati perjalanan bisnis atau pribadi anda bersama kami</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php  include"layout_frontend/footer.php"?>