<?php 
require 'funct.php';

//ambil data url
$id= $_GET["id"];
//query data mahasiswa
$jdwl=query("SELECT * FROM jadwal WHERE id=$id")[0];

if( isset($_POST["submit"]) ){
	if( ubah($_POST) > 0 ){
		echo "
		<script>
			alert('Data Berhasil diperbaharui!');
			document.location.href = 'jadwal.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Data Gagal diperbaharui!');
			document.location.href = 'jadwal.php';
		</script>
		";
	}
	
}
?>
<html>
	<head>
		<meta content="text/html; charset=utf-8" />
		<title>IKLC</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
        <style>
#more {display: none;}
</style>
	</head>
	<body>
		<div id="bg">
			<div id="outer">
				<div id="header">
					
					<div id="nav">
						<ul>
							<li class="first active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Jadwal</a>
							</li>
							<li>
								<a href="#">About</a>
							</li>
							<li>
								<a href="#">Pengumuman</a>
							</li>
						</ul>
						<br class="clear" />
					</div>
				</div>
				<div id="main">
					<div id="sidebar1">
						<h3>
				            Visi IKLC
						</h3>
						<p>
							Visi Ilmu Komputer Laboratory Center adalah sebagai wadah untuk mengembangkan pengetahuan <span id="dots">...</span><span id="more">di laboratorium ilmu komputer dan membentuk asisten laboratorium yang memiliki profesionalitas, kualitas, dan moralitas yang baik.
                            </span></p>
                        <button onclick="myFunction()" id="myBtn">Read More</button>

                        <script>
                            function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read More"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
                        </script>
						</ul>
					</div>
					<div id="sidebar2">
						<h3>
							Misi IKLC
						</h3><img class="top" src="images/iklc2.png" width="190" height="65" alt="" />
						<ul class="linkedList">
							<li class="first">
				            <a href='#'>Read More</a>
						</ul>
					</div>
					
						<div id="box3">
							<h3>
								Update Jadwal Laboratorium IKLC
							</h3>
							<a href="tambah.php" >Masukkan Jadwal Lab</a>
<br></br>
<div class="container" >
	<form action="" method="post">
		<input type="hidden" name="id" required value="<?= $jdwl["id"]; ?>">
			<div>
				<label for="Ruangan"><h6>Ruangan	:</h6></label>
				<div>
				<input type="text" name="Ruangan" id="Ruangan"   required value="<?= $jdwl["Ruangan"] ?>">
			</div>
		</div>
			<div>
				<label for="Mata"><h6>Mata Kuliah :</h6></label>
				<div>
				<input type="text" name="Mata" id="Mata"  value="<?= $jdwl["Mata"] ?>">
			</div>
		</div>
			<div>
				<label for="Asisten"><h6>Asisten	:</h6></label>
				<div>
				<input type="text" name="Asisten" id="Asisten"  value="<?= $jdwl["Asisten"] ?>">
			</div>
		</div>
			<div>
				<label for="Hari"><h6>Hari :</h6></label>
				<div>
				<input type="text" name="Hari" id="Hari"  value="<?= $jdwl["Hari"] ?>">
			</div>
		</div>
			<div>
				<label for="Pukul"><h6>Pukul	:</h6></label>
				<div>
				<input type="text" name="Pukul" id="Pukul" value="<?= $jdwl["Pukul"] ?>">
			</div>
		</div>
			<div>
				<label for="KOM"><h6>KOM	:</h6></label>
				<div>
				<input type="text" name="KOM"  id="KOM"
				value="<?= $jdwl["KOM"] ?>">
			</div>
		</div>
			<div>
				<button type="submit" class="btn btn-outline-dark" name="submit">Update Data</button>
			</div>
	</form>
</div>
						</div>
						<br class="clear" />
				
					<br class="clear" />
				</div>
			</div>
			<div id="copyright">
				&copy;  | Ilmu Komputer Laboratory Center |
			</div>
		</div>
	</body>
</html>
