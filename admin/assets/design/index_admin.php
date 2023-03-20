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
      <div class="w-44 bg-gray-200">
        <a href="#" class="w3-bar-item w3-button">
        <i class="fa fa-envelope"></i>
        Email Admin
        </a>
        <a href="index.php" class="w3-bar-item w3-button pt-2">
          <i class="fa fa-home"></i>
          Beranda
        </a>
        <div class="w3-dropdown-hover pt-2">
          <button class="w3-button">
          <i class="fa fa-bars" aria-hidden="true"></i>
            Data Produck
          <i class="fa fa-caret-down"></i>
          </button>
        <div class="w3-dropdown-content w3-bar-block">
          <a href="data_merk.php" class="w3-bar-item w3-button">
          <i class="fa fa-file-text-o"></i>
          Data Merk</a>
          <a href="data_mobil.php" class="w3-bar-item w3-button">
          <i class="fa fa-car"></i>
          Data Mobil</a>
        </div>
      </div>
      <div class="w3-dropdown-hover pb-7">
          <button class="w3-button">
          <i class="fa fa-bars" aria-hidden="true"></i>
            Data User
          <i class="fa fa-caret-down"></i>
          </button>
          <div class="w3-dropdown-content w3-bar-block">
            <a href="data_customer.php" class="w3-bar-item w3-button">
              <i class="fa fa-user"></i>
                Data Customer
            </a>
            <a href="data_jenis_bayar.php" class="w3-bar-item w3-button">
              <i class="fa fa-usd"></i>
                Data Jenis Bayar
            </a>
          </div>
      </div>
      <a href="#" class="w3-bar-item w3-button">
        <i class="fa fa-sign-out"></i>
        Logout
      </a>
      </div>
      <div class="flex-1 h-full relative ">
        <div class="flex flex-col w-full h-full absolute left-0 top-0 z-10">
          <div class="flex-1 h-full  overflow-y-auto">
            <div class="w3-container">
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
                  <div class="w-1/2 pl-16 pt-5 ">
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
                        <img class="rounded" src="../images/images_admin/admin-logo.png" />
                      </div>
                    </div>
                    <!-- Nama Admin -->
                    <div class="w-2/3 ">
                      <div class="flex flex-row py-1"> 
                        <div class="w-1/4">Nama</div>
                        <div class="flex-1">:</div>
                      </div>

                      <div class="flex flex-row py-1">
                        <div class="w-1/4">Tanggal</div>
                        <div class="flex-1">:</div>
                      </div>
                      <div class="flex flex-row py-1">
                        <div class="w-1/4">Server</div>
                        <div class="flex-1">: Localhost</div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div>
            <div class="w-full h-20 bg-red-500">test</div> -->
          </div>
          <!-- footer -->
          <div class="h-12 bg-blue-200">footer</div>
        </div>
      </div>
  </div>
</div>
</body>
</html>