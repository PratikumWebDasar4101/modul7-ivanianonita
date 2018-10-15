<?php
session_start();
require_once("db7.php");
 
$nim=$_POST['nim'];
$_SESSION['nim'] = $nim;

$nama=$_POST['nama'];
$_SESSION['nama'] = $nama;

$jeniskelamin=$_POST['jeniskelamin'];
$_SESSION['jeniskelamin'] = $jeniskelamin;

$prodi=$_POST['prodi'];
$_SESSION['prodi'] = $prodi;

$fakultas=$_POST['fakultas'];
$_SESSION['fakultas'] = $fakultas;

$asal=$_POST['asal'];
$_SESSION['asal'] = $asal;

$motohidup = $_POST['motohidup'];
$_SESSION['motohidup'] = $motohidup;

$sql ="INSERT INTO mahasiswabaru(nim,nama,jeniskelamin,prodi,fakultas,asal,motohidup) values ('$nim','$nama','$jeniskelamin','$prodi','$fakultas','$asal','$motohidup')";


if(mysqli_query($conn,$sql)){
 header("Location:tampil7.php");
}else{
	echo"Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?> 