<html>
<head>
<body>
<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="honda"; 

$conn = mysqli_connect($servername, $username,$password,$dbname);
$nama		= $_POST['nama'];
$email		= $_POST['email'];
$password	= $_POST['password'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk 		= $_POST['jk'];
$jenis		= $_POST['jenis'];
$telpon		= $_POST['telpon'];
$alamat		= $_POST['alamat'];
if(!$conn) {
	die("Connection Failed : ".mysqli_connect_error());
}

$sql = "INSERT INTO member (nama,email,password,tempat_lahir,tanggal_lahir,jk,jenis,telpon,alamat) values  ('$nama','$email','$password','$tempat_lahir','$tanggal_lahir','$jk','$jenis','$telpon','$alamat')";

if (mysqli_query($conn, $sql)) {
	include("login.php");
}
	else {
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>
	
</body>

</head>
</html>