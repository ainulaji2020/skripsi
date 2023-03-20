<?php 
	// echo $nav;
	// die();
	$nav_home 			= ($nav == 'home') ? 'bg-gray-700 text-white' : 'text-gray-700 hover:bg-blue-300 hover:text-gray-600'; 
	$nav_rental_mobil 	= ($nav == 'rental_mobil') ? 'bg-gray-700 text-white' : 'text-gray-700 hover:bg-blue-300 hover:text-gray-600'; 
	$nav_tenteang_kami	= ($nav == 'tentang_kami') ? 'bg-gray-700 text-white' : 'text-gray-700 hover:bg-blue-300 hover:text-gray-600'; 
	$nav_gallery 		= ($nav == 'gallery') ? 'bg-gray-700 text-white' : 'text-gray-700 hover:bg-blue-300 hover:text-gray-600'; 
	$nav_kontak_kami	= ($nav == 'kontak_kami') ? 'bg-gray-700 text-white' : 'text-gray-700 hover:bg-blue-300 hover:text-gray-600'; 
?>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css" />
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  	<script src="assets/js/slider.js"></script>
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
		      <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
		      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
		      </svg>
		      <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
		        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
		      </svg>
		    </button>
	  </div>
	  <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
	    <div class="flex-shrink-0 flex items-center mr-10">
	      <img class="block lg:hidden h-8 w-auto" src="assets/images/Lm-logo1.jpg" >
	      <img class="hidden lg:block h-8 w-auto" src="assets/images/Lm-logo1.jpg" alt="Workflow">
	    </div>
	    <div class="hidden sm:block sm:ml-6">
	      <div class="flex space-x-4">
	        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
	        <a href="index.php" class="<?php echo $nav_home;?> px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

	        <a href="rental_mobil.php" class="<?php echo $nav_rental_mobil;?> px-3 py-2 rounded-md text-sm font-medium">Rental Mobil</a>

	        <a href="tentang_kami.php" class="<?php echo $nav_tenteang_kami;?> px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>

	        <a href="gallery.php" class="<?php echo $nav_gallery;?> px-3 py-2 rounded-md text-sm font-medium">Gallery</a>

	        <a href="kontak_kami.php" class="<?php echo $nav_kontak_kami;?> px-3 py-2 rounded-md text-sm font-medium">Kontak Kami</a>
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
	          <img class="h-8 w-8 rounded-full" src="assets/images/usericon.png" alt="">
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
 	<!-- <div class="sm:hidden" id="mobile-menu"> -->
 		<!-- <div class="px-2 pt-2 pb-3 space-y-1"> -->
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      		<!-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>

      		<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Rental Mobil</a>    

      		<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Tentang Kami</a>

  		    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Galer</a>

      		<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kontak Kami</a>
    	</div> -->
  	</div>
</nav>