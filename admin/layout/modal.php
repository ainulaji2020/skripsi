<div id="modal-wrapper" class="w-full h-full fixed inset-0 flex justify-center items-center " style="background-color: rgba(0,0,0,0.5);">
	<div class="w-1/3 py-10 text-center bg-white rounded relative flex flex-wrap">
		<button id="close-modal" class="absolute top-0 right-0 mt-1 mr-2">
			<i class="fa fa-remove text-lg"></i>
		</button>
		<div class="w-full mb-4">
			<i class="fa <?php if($modal_status == 1){ echo 'fa-check-circle-o text-green-400'; }if($modal_status == 2){ echo 'fa-times text-red-400'; }if($modal_status == 3){ echo 'fa-info-circle text-yellow-400'; }?> fa-5x "></i>
		</div>
		<div class="w-full">
			<?php echo $modal_message;?>
		</div>
	</div>
</div>