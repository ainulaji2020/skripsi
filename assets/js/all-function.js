function tambah() {
	let nilai = parseInt(document.getElementById("tambah1").value);
	document.getElementById("tambah1").value = nilai+1;
}

function kurang() {
	let nilai = parseInt(document.getElementById("tambah1").value);
	if(nilai > 1){
		document.getElementById("tambah1").value = nilai-1;
	}
}

function tandapesan() {
  alert("terima kasih telah mengisi formulir tersebut ,, Apakah Bapak/ ibu sudah mengisi Yang di Detail ?");
}

// function datepicker (){
// 	("#datepicker" ).datepicker(
// }

function notivebooking() { 
	alert("Terima Kasih Atas Pemesanan Anda Dirental Kami , Silahakan tunggu konfirmasi dari pihak rental"); 
}