<?php 
session_start();
include"../../layout/header.php";
?>
		<h2>Detail Data Customer</h2>
		<hr/>
		<div class="w-3/4 bg-blue-300 flex">
				<div class="w-1/2 bg-blue-600">
					<img class="rounded-md" src="">tes1
				</div>
				<div class="w-1/2 bg-red-300">
					<img class="rounded-md" src="">tes
				</div>
		</div>
		<div class="flex py-3">
			<div class="bg-gray-300 w-1/4 pl-2 py-2" 
				 style="border-top-left-radius: 5px;
						border-bottom-left-radius: 5px;">
				<p>No KTP</p>
				<p>Nama </p>
				<p>Pekerjaan</p>
				<p>Tanggal Lahir</p>
				<p>Status</p>
				<p>No Telphone</p>
				<p>Alamat</p>
			</div>
			<div class="bg-gray-300 w-1/4 py-2"
				 style="border-top-right-radius: 5px;
						border-bottom-right-radius: 5px;">
				<p>: No KTP</p>
				<p>: Nama </p>
				<p>: Pekerjaan</p>
				<p>: Tanggal Lahir</p>
				<p>: Status</p>
				<p>: No Telphone</p>
				<p>: Alamat</p>
			</div>
		</div>
		
<?php include"../../layout/footer.php";?>