<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	$(".hasil").click(function(){$("#foto2").hide("slow")});
	$(".hasil").click(function(){$("#foto3").hide("slow")});
	$(".hasil").click(function(){$("#foto").show("slow")});
	$(".hasil2").click(function(){$("#foto").hide("slow")});
	$(".hasil2").click(function(){$("#foto2").show("slow")});
	$(".hasil2").click(function(){$("#foto3").hide("slow")});
	$(".hasil3").click(function(){$("#foto").hide("slow")});
	$(".hasil3").click(function(){$("#foto2").hide("slow")});
	$(".hasil3").click(function(){$("#foto3").show("slow")});
		});
	</script>
</head>
<body >
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
	<table width="900" cols="1" colsspacing=9px class="imgb">
	<tr>
	<td><button class="hasil" >SERVICE</button></td>
	<td><center><button class="hasil2" >CUSTOMER SERVICE</button></center></td>
	<td><button class="hasil3" >SUKU CADANG</button></td>
	</tr>
		</table>
	<br>
	<table width="900" cols="1" class="tengah">
		
		<tr><td>
	<div id="foto">
	<img src="serice.png" width="600" height="500" class="tengah">
			<br><center><h3>Jangan Lupa Service Rutin</h3> </center></img></div>
			</td></tr>
	<tr><td>
	<div id="foto2">
		<img src="cs.png" width="600" height="500" class="tengah">
		<br><center><h3>Call Center : 14045</h3> </center></img></div>
			</td></tr>
	<tr><td>
	<div id="foto3">
		<img src="suku.png" width="600" height="500" class="tengah">
		<br><center><h3>Ganti Suku Cadang Biar Aman</h3> </center></img></div>
			</td></tr>
		</table>
</body>
</html>


<body>
</body>
</html>