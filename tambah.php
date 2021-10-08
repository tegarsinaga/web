<?php 
require 'funct.php';
if( isset($_POST["submit"]) ){
	if( tambah($_POST) > 0 ){
		echo "
		<script > 
			alert('Data Berhasil di Tambahkan!');
			document.location.href = 'jadwal.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Data Gagal di Tambahkan!');
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
								Tambah Jadwal Laboratorium IKLC
							</h3>
							<a class="btn btn-secondary btn-lg btn-block" href="tambah.php" >Masukkan Jadwal Lab</a>
<br></br>
<div class="container" >
	<form action="" method="post">
		<div >
				<label for="Ruangan" ><h6>RUANGAN :</h6></label>
				<div >
				<input type="text" name="Ruangan" id="Ruangan">
			</div>
		</div>
			
		<div >
				<label class=" badge badge-secondary col-sm-2" for="Mata"><h6>MATA KULIAH :</h6></label>
				<div >
				<input type="text" name="Mata"   id="Mata">
			</div>
		</div>
		<div >
				<label for="Asisten"><h6>ASISTEN :</h6></label>
				<div >
				<input type="text" name="Asisten" id="Asisten">
			</div>
		</div>
			<div >
				<label for="Hari"><h6>HARI :</h6> </label>
				<div >
				<input type="text" name="Hari"  id="Hari">
			</div>
			</div>
			<div >
				<label for="Pukul"><h6>PUKUL :</h6></label>
				<div >
				<input type="text" name="Pukul" id="Pukul">
			</div>
			</div>
			<div >
				<label for="KOM"><h6>KOM :</h6></label>
				<div >
				<input type="text" name="KOM" id="KOM">
			</div>
			</div>
			<div>
				<button type="submit"  name="submit">SUBMIT</button>
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
