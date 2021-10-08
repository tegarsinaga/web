<?php
$conn = mysqli_connect("localhost","root","","Tegar");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows =[];
	while($row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	$Ruangan =htmlspecialchars($data["Ruangan"]);
	$Mata =htmlspecialchars($data["Mata"]);
	$Asisten =htmlspecialchars($data["Asisten"]);
	$Hari =htmlspecialchars($data["Hari"]);
	$Pukul =htmlspecialchars($data["Pukul"]);
	$KOM =htmlspecialchars($data["KOM"]);

	$query="INSERT INTO jadwal
			VALUES 
			('','$Ruangan', '$Mata','$Asisten', '$Hari', '$Pukul','$KOM')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM jadwal WHERE id=$id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id=$data["id"]; 
	$Ruangan =htmlspecialchars($data["Ruangan"]);
	$Mata =htmlspecialchars($data["Mata"]);
	$Asisten =htmlspecialchars($data["Asisten"]);
	$Hari =htmlspecialchars($data["Hari"]);
	$Pukul =htmlspecialchars($data["Pukul"]);
	$KOM =htmlspecialchars($data["KOM"]);

	$query="UPDATE jadwal SET
			Ruangan ='$Ruangan',
			Mata='$Mata',
			Asisten='$Asisten', 
			Hari='$Hari',
			Pukul='$Pukul',
			KOM='$KOM' 

			WHERE id='$id'
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>