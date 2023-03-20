<?php 
	class helpers{
		function setModal($status,$message){
			$_SESSION['modal_status'] = $status;
			$_SESSION['modal_message'] = $message;
		}
	}
?>