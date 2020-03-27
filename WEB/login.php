<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="latihan 2.js"></script>


<body bgcolor=black>
	<nav class="menu" align="left">
<ul>
	<li>
	<a href="produk.php">Produk</a>
</li>
<li>
	<a href="layanan.php">Layanan</a>
</li>
<li>
	<a href="login.php">Login</a>
</li>
<li>
	<a href="home.php">Home</a>
</li>
</ul>
	</nav>
	<center><h2>LOGIN</h2></center>
<div class="vid-container">
  
  <div class="inner-container">
    <video class="bgvid inner" autoplay="autoplay" muted="muted" preload="auto" loop>
      <source src="video.mp4"  type="video/webm">
    </video>
	<div class="box"></div>

<div class="container">
	<form action="prosesdaftar.php" method="post" onSubmit="validasi()" >
		<br><br><br>
		<input type="text" class="hasil" name="email" placeholder="Username/Email" id="email" >
		<br> <br>
		<input type="password" class="hasil" name="password" placeholder="Password" id="password" />
		<br>
		<br>
		<center><input class="button" align="center" type="submit" value="Login"></center>
		<br><br>
		<center><a href="buatakun.php"><input type="button" class="button" name="buat" value="Buat Akun"></a></center>
	</form>
	
	</div>
	</div>
		
</body>
	<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
	</script>
</html>