<?php if (!isset($_SESSION['id_admin'])) { header('location:../index.php'); } ?>
<?php $baseUrl = 'http://localhost/rental_mobil/admin/'; ?>

<html>
<head>
  <title>Index admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/style_admin.css">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="w-full h-full fixed flex flex-col shadow-md">
    <div class="h-10 bg-blue-200 text-center pt-2 shadow-md">SISTEM APLIKASI RENTAL MOBIL BERBASIS WEB</div>
    <div class="flex-1 h-full flex flex-row">
      <div class="w-44 bg-gray-200 px-2">
        
        <a href="<?php echo $baseUrl;?>views/index.php" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-envelope"></i>
          </div>
          <span class="flex-1">admin</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/index.php" class="flex flex-row block w-full text-left my-2">
          <div style="background-color: blue;" class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-home"></i>
          </div>
          <span class="flex-1">Beranda</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/customer" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-user"></i>
          </div>
          <span class="flex-1">Customer</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/harga" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-money"></i>
          </div>
          <span class="flex-1">Harga</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/merk" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-file-text-o"></i>
          </div>
          <span class="flex-1">Merk</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/mobil" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-car"></i>
          </div>
          <span class="flex-1">Mobil</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/sewa" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-shopping-cart"></i>
          </div>
          <span class="flex-1">Sewa</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/jenis_bayar" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-usd"></i>
          </div>
          <span class="flex-1">Data Jenis</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/kontak" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-bell"></i>
          </div>
          <span class="flex-1">Kontak Kami</span>
        </a>

        <a href="<?php echo $baseUrl;?>views/gambar" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="fa fa-picture-o"></i>
          </div>
          <span class="flex-1">Gambar</span>
        </a>

        <a href="<?php echo $baseUrl;?>logout.php" class="flex flex-row block w-full text-left my-2">
          <div class="w-6 flex justify-center items-center">
            <i class="mr-2 fa fa-sign-out"></i>
          </div>
          <span class="flex-1">Logout</span>
        </a>
      </div>
      <div class="flex-1 h-full relative ">
        <div class="flex flex-col w-full h-full absolute left-0 top-0 z-10">
          <div class="flex-1 h-full  overflow-y-auto">
            <div class="w3-container">