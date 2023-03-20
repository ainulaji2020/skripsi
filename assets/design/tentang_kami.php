<html>
<head>
	<title>Tentang Kami</title>
	  <link rel="stylesheet" type="text/css" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css" />
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- NAVBAR -->
	<nav class="bg-gray-200 ">
	  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
	    <div class="relative flex items-center justify-between h-16">
	      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
	        <!-- Mobile menu button-->
	        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
	          <span class="sr-only">Open main menu</span>
	          <!--
	            Icon when menu is closed.

	            Heroicon name: outline/menu

	            Menu open: "hidden", Menu closed: "block"
	          -->
	          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
	          </svg>
	          <!--
	            Icon when menu is open.

	            Heroicon name: outline/x

	            Menu open: "block", Menu closed: "hidden"
	          -->
	          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
	          </svg>
	        </button>
	      </div>
	      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
	        <div class="flex-shrink-0 flex items-center mr-10">
	          <img class="block lg:hidden h-8 w-auto" src="../images/Lm-logo.jpg" >
	          <img class="hidden lg:block h-8 w-auto" src="../images/Lm-logo.jpg" alt="Workflow">
	        </div>
	        <div class="hidden sm:block sm:ml-6">
	          <div class="flex space-x-4">
	            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
	            <a href="index.php" class="bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

	            <a href="rental_mobil.php" class="text-gray-300 hover:bg-blue-300 text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Rental Mobil</a>

	            <a href="tentang_kami.php" class="text-gray-300 hover:bg-blue-300 text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>

	            <a href="galery.php" class="text-gray-300 hover:bg-blue-300 text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Galery</a>

	            <a href="kontak_kami.php" class="text-gray-300 hover:bg-blue-300 text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Kontak Kami</a>
	          </div>
	        </div>
	      </div>
	      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
	        <button class="bg-gray-700 p-1 rounded-full text-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
	          <span class="sr-only">View notifications</span>
	          <!-- Heroicon name: outline/bell -->
	          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
	          </svg>
	        </button>

	        <!-- Profile dropdown -->
	        <div class="ml-3 relative group">
	          <div>
	            <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
	              <span class="sr-only">Open user menu</span>
	              <img class="h-8 w-8 rounded-full" src="../images/usericon.png" alt="">
	            </button>
	          </div>

	          <!--
	            Dropdown menu, show/hide based on menu state.

	            Entering: "transition ease-out duration-100"
	              From: "transform opacity-0 scale-95"
	              To: "transform opacity-100 scale-100"
	            Leaving: "transition ease-in duration-75"
	              From: "transform opacity-100 scale-100"
	              To: "transform opacity-0 scale-95"
	          -->
	          <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden group-hover:block" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
	            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Login</a>
	            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>

	  <!-- Mobile menu, show/hide based on menu state. -->
	  <div class="sm:hidden" id="mobile-menu">
	    <div class="px-2 pt-2 pb-3 space-y-1">
	      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
	      <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>

	      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Rental Mobil</a>    

	      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Tentang Kami</a>

	      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Galer</a>

	      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kontak Kami</a>
	    </div>
	  </div>
	</nav>
	<!-- Content -->
	<div class="w-full h-24 bg-gray-800 text-center text-gray-200 py-6 text-4xl font-arial shadow-lg">
		<div>Tentang Kami</div>
	</div>
	<div class="container mx-auto flex flex-wrap">
		<div class="w-3/5 flex flex-wrap">
			<div class="px-4 py-4 w-3/6">
				<img class="w-full bg-center rounded-lg h-80" src="../images/picture-1.jpg">
			</div>
			<div class="px-4 py-4 w-3/6">
				<img class="w-full bg-center rounded-lg h-80" src="../images/picture-2.jpg">
			</div>
			<div class="px-4 py-4 w-3/6">
				<img class="w-full bg-center rounded-lg h-80" src="../images/picture-5.jpg">
			</div>
			<div class="px-4 py-4 w-3/6">
				<img class="w-full bg-center rounded-lg h-80" src="../images/picture-4.jpg">
			</div>
		</div>
		<div class="w-2/5 ">
			<div class="w-full px-2 py-4">
				<h2 class="text-3xl">
					<ins>Tentang Laksana Mandiri Motor</ins>
				</h2>
				<p class="text-blue-600 text-xl">Butuh Jasa Rental Mobil Untuk Daerah Bogor-Bsd & Sekitarnya? Laksana Mandiri Motor Solusinya</p>
				<p class="text-lg"><b>Laksana Mandiri Motor</b> merupakan salah satu penyedia <b>jasa rental mobil</b> yang sudah profesional dan terpercaya dengan berbagai armada yang tersedia untuk Anda. <b> Laksana Mandiri Motor</b> berlokasi di <b>Jl. Raya Pasar Jengkol - Viktor - Jurusan Angkot Parung - BSD. Laksana Mandiri Motor</b> berkomitmen untuk selalu menyediakan pelayanan terbaik untuk para konsumen sehingga kami bisa menjadi salah satu <b>jasa rental mobil terbaik</b> di <b>Bogor-Tangsel</b> dan sekitarnya.<br/><b>Laksana Mandiri Motor</b> menyediakan berbagai mobil dengan fasilitas yang berbeda dan harga yang bervariasi. Armada yang tersedia di <b>Laksana Mandiri Motor</b> adalah :</p>
				<ul class="px-4 py-2" style="list-style-type: circle;">
					<li><b>Avanza</b></li>
					<li><b>Jazz</b></li>
					<li><b>Pick up</b></li>
					<li><b>Brio</b></li>
				</ul>
				<p><b>Laksna Mandiri Motor</b> memiliki driver yang sudah berpengalaman sehingga siap mengantarkan Anda berkeliling <b>Bogor-Tangsel</b> dengan nyaman dan aman. Selain itu mobil dari <b>Laksana Mandiri Motor</b> sudah pasti dirawat dengan baik sehingga selalu dalam kondisi prima. Untuk Anda yang ingin menyewa mobil bisa segera menghubungi kami, kami siap melayani Anda dengan sepenuh hati.</p>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer id="footer" class="bg-gray-200" class="footer-shadow">
		<div class="container mx-auto pt-10 pb-4 mt-20">
			<div class="flex flex-wrap overflow-hidden sm:-mx-1 md:-mx-px lg:-mx-2 xl:-mx-2">
			    <div 
			    	class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6"
			    >
			    	<img
			    		class=""
			    		alt="Logo"
			    		src="../images/Lm-logo.jpg"
			    		style="
			    			max-width: 100%;
			    			height:110px;
			    			border-radius: 3px;
			    			margin-left: 80px;
			    			margin-right: 80px;"
			    	>
			    </div>

			    <div
			    	class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6 text-black"
			    >
			      	<i class="fa fa-whatsapp fa-3x text-gray-700 pb-3 pl-16">
			       		<span class="font-serif pl-3 text-black">Call</span>
			     		</i>
			       <p class="pl-16"><b>tes nomer</b></p>
			    </div>

			    <div
			    	class="w-full overflow-hidden sm:my-1 sm:px-5 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:w-1/4 xl:my-2 pl-72 xl:w-1/4 pb-6"
			    >
			      <i class="fa fa-envelope fa-3x text-gray-700 pb-3 pl-10">
			      	<span class="font-serif pl-3 text-black">Mail</span>
			      </i>
			      <p class="pl-10"><b>tes email</b></p>
			    </div>

			    <div
			    	class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6"
			    >
			      <i class="fa fa-map-marker fa-3x text-gray-700 pb-3 pl-10">
			      	<span class="font-serif pl-3 text-black">Location</span>
			      </i>
			      <p class="pl-12"><b>tes alamat</b></p>
			    </div>
			</div>
			<div class="pt-4 md:flex md:items-center md:justify-center" style="border-top:1px solid white">
				<b>@ 2021 Laksana Mandiri Motor</b>
			</div>
		</div>
	</footer>
</body>
</html>