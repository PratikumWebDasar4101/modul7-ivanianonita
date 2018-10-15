<?php
session_start();
require_once("db7.php");
?>
<table border=1>
	<head>
		<th>Nim</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Moto hidup</th>
	</head>
	<tbody>
<?php
$sql = "SELECT * FROM mahasiswabaru";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	//output data of each row
	while($row=mysqli_fetch_assoc($result)){
		$nim=$row['nim'];
		echo"<tr>";
		echo"<td>".$row["nim"]."</td>";
		echo"<td>".$row["nama"]."</td>";
		echo"<td>".$row["jeniskelamin"]."</td>";
		echo"<td>".$row["prodi"]."</td>";
		echo"<td>".$row["fakultas"]."</td>";
		echo"<td>".$row["asal"]."</td>";
		echo"<td>".$row["motohidup"]."</td>";
		echo"<td>"."<a href='delete7.php?nim=$nim'>Delete</a></td>";
		echo"</tr>";
	}
}else{
	echo "0 results";
}
mysqli_close($conn);
?>
</tbody>
</table>