<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buat Akun</title>
<link rel="stylesheet" type="text/css" href="style.css">
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

<body>
	<center><h2>BUAT AKUN</h2></center>
	<form action="cek.php" method="POST">
	<table width="648" align="center" cellpadding="2" cellspacing = "2" >
		<tr>
			<td width="70"><h4> Nama</h4></td>
			<td width="404"><input type="text" class="hasil" name="nama" id="nama" /></td>
		</tr>
		<tr>
			<td width="70"><h4>Email</h4></td>
			<td><input type="email" class="hasil" name="email" id="email" /></td>
		</tr>
		<tr>
			<td width="70"><h4>Password</h4></td>
			<td><input type="password" class="hasil" name="password" id="password" /></td>
		</tr>
		<tr>
			<td width="70"><h4>Tempat Lahir</h4></td>
			<td><input type="text" class="hasil" name="tempat_lahir" id="tempat_lahir" /></td>
		</tr>
		<tr> 
			<td width="70"><h4>Tanggal Lahir</h4></td>
			<td><input type="date" class="hasil" name="tanggal_lahir" id="tanggal_lahir" /></td>
		</tr>
		<tr>
			<td width="70"><h4>Jenis Kelamin</h4></td>
		<td>
			<label class="container2"><h4 align="left">Laki - Laki</h4>
  			<input type="radio" checked="checked" name="jk" value="Laki - Laki"> 
  			<span class="checkmark"></span>
			</label></td>
			<td width="70">
			<label class="container2"><h4 align="left">Perempuan</h4>
  			<input type="radio" name="jk">
  			<span class="checkmark"></span>
		</label>
		</tr>
		<tr>
			<td width="70"><h4>Jenis Mobil</h4></td>
			<td><select name=jenis class="hasil" id="jenis" />Jenis Mobil
                <option value="Brio">Brio</option>
                <option value="Mobilio">Mobilio</option>
				<option value="Jazz">Jazz</option>
				<option value="Freed">Freed</option>
                <option value="Jazz">City</option>
                <option value="Civic">Civic</option>
				<option value="HRV">HRV</option>
				<option value="CRV">CRV</option>
				<option value="Type R">Type R</option>
				<option value="Belum Punya Honda">Belum Punya Honda</option>
            </select></td>
		</tr>
		<tr>
			<td width="70"><h4>Nomer Telpon</h4></td>
			<td><input type="number" class="hasil" name="telpon" maxlength="13" id="telpon" /></td>
		</tr>
		<tr>
			<td width="70"><h4>Alamat</h4></td>
			<td><textarea name="alamat" class="hasil" rows="5" cols="50" id="alamat"/></textarea> </td>
		</tr>
		<tr>
			<td>
				<td>
				<center><input class="button" align="center" type="submit" value="Buat"></center>
				
			</td>
		</td>
		</tr>
	</table>
	</form>
	
</body>
		
</html>