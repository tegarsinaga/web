<?php  
require 'funct.php';
$id= $_GET["id"];
if(hapus ($id) > 0){
		echo "
		<script>
			alert('Data Berhasil di Hapus!');
			document.location.href = 'jadwal.php';
		</script>
		";
} else{
	echo "
		<script>
			alert('Data Gagal di Tambahkan!');
			document.location.href = 'jadwal.php';
		</script>
		";
	}
?>