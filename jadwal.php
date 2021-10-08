<?php
require 'funct.php';
$jadwal = query("SELECT * FROM jadwal")

?>
<html>
	<head>
		<meta content="text/html; charset=utf-8" />
		<title>IKLC</title>
		<link rel="stylesheet" type="text/css" href="" />
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
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="http://localhost/lab/jadwal.php">Jadwal</a>
							</li>
							<li>
								<a href="https://www.instagram.com/iklcusu/?hl=id">Pengumuman</a>
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
								Jadwal Laboratorium IKLC
							</h3>
							<a class="btn btn-secondary btn-lg btn-block" href="tambah.php" >Masukkan Jadwal Lab</a>
<br>
<table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-striped">
	

	<tr class="thead-dark">
		<th >No.</th>
		<th>Ruangan</th>
		<th>Mata Kuliah</th>
		<th>Asisten</th>
		<th> Hari</th>
		<th>Pukul</th>
		<th>Kom</th>
		<th>Aksi</th>
	</tr>
	<?php $i=1; ?>
	 <?php foreach($jadwal as $row ) : 

	 ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["Ruangan"]; ?></td>
		<td><?= $row["Mata"]; ?></td>
		<td><?= $row["Asisten"]; ?></td>
		<td><?= $row["Hari"]; ?></td>
		<td><?= $row["Pukul"]; ?></td>
		<td><?= $row["KOM"]; ?></td>
		<td>
			<a  class="btn btn-outline-primary" href="ubah.php?id=<?= $row["id"]; ?>" >UPDATE </a>
			<a  class="btn btn-outline-danger"href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus jadwal ? ');">DELETE</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
							
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
