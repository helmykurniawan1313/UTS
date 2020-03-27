<?php 
if (empty($_POST['nama'])) {
	header("Location:kosong.php");
}
elseif (empty($_POST['email'])) {
	header("Location:kosong.php");
	}
elseif (empty($_POST['password'])) {
	header("Location:kosong.php");
	}
elseif (empty($_POST['tempat_lahir'])) {
	header("Location:kosong.php");
	}
elseif (empty($_POST['tanggal_lahir'])) {
	header("Location:kosong.php");
	}

elseif (empty($_POST['jenis'])) {
	header("Location:kosong.php");
	}
elseif (empty($_POST['telpon'])) {
	header("Location:kosong.php");
	}
elseif (empty($_POST['alamat'])) {
	header("Location:kosong.php");
	}
else {
	 include "insert_into.php";
	
}
?>