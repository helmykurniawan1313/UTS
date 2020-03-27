<html>
<head>
	<title>Membuat Form Validasi dengan Javascript - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>WWW.MALASNGODING.COM</h2></center>
	<div class="login">
		<form action="#" method="POST" onSubmit="validasi()">
			
				<label>Nama Lengkap:</label>
				<input type="text" name="nama" id="nama" />
			
				<label>Email:</label>
				<input type="email" name="email" id="email" />
			
				<label>Alamat:</label>
				<textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
			
				<input type="submit" value="Daftar" class="tombol">
			
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
		var alamat = document.getElementById("alamat").value;
		if (nama != "" && email!="" && alamat !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
</html>