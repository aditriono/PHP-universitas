<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Universitas Jaya Sentosa</title>
	<meta charset="utf-8">
	<link href="img/us.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style_hov.css">
</head>
<body>
	<header>
		<img class="kiri" width="170" src="img/logo.png"></img>
		<h1 class="judul">Universitas Jaya Sentosa</h1>
		<p class="deskripsi"></p>
	</header>
	<div class="wrap">
		<nav class="menu">
			<ul>
				<li>
					<a href="index.php">Beranda</a>
				</li>
				<li>
					<a href="sejarah.html">Tentang Kami</a>
				</li>
				<li>
					<a href="#">Jurusan</a>
				</li>
				<li>
					<a href="pendaftaran.php">Pendaftaran</a>
					<div class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
				</li>
				<li>
					<a href="kontak.php">Kontak</a>
				</li>
			</ul>
		</nav>
	</div>
		<aside class="sidebar">
			<div class="widget">
				<h2>ABOUT</h2>
				<p>Selamat datang di Universitas Jaya Sentosa, Situs ini merupakan situs resmi kami. 
				untuk mempermudah siswa dan orang tua dapat registrasi dan melihat jurusan.</p>
			</div>
			<div class="widget">
				<h2>LOGIN</h3>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="user_id" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="pass" id="password" />
			</div>			
			<div>
				<input type="submit" value="login" name="login" class="tombol">
			</div>
		</form>
		<a href="logform.php">NewUser</a>
	</div>
		</aside>
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					<footer>Ditulis Pada:
						<time itemprop="datePublished" datetime="2016-01-21">Senin, 21 Januari 2016</time>.
					</footer>
		</div>
				<img src="img/gedung.jpg">
				<h1> Kampus Hijau dan Asri </h1>
				<hr>
				<p>
					Universitas Jaya Sentosa didirikan pada tanggal 22 Januari 1991, 
					merupakan penggabungan dari Universitas Jaya Sentosa (lama) 
					yang didirikan pada tahun 1983 dan Universitas Bung Karno.
					Jaya Sentosa yang dijadikan nama dari Universitas ini tidaklah 
					sekedar tanda pengenal dan pembeda dari Universitas-universitas lainnya, 
					melainkan memiliki kedalaman arti yang hakiki, sesuai dengan misi yang 
					diemban Universitas Jaya Sentosa, yaitu &quot;Memberikan peranan positif 
					dalam pengembangan ilmu dan teknologi serta pengembangan masyarakat ber-Jaya 
					Sentosa seperti yang dicita-citakan dalam Pembukaan Undang-undang Dasar 1945&quot;.
					Dalam rangka inilah Universitas Jaya Sentosa berniat dan beritikad untuk 
					menghasilkan sarjana-sarjana yang berjiwa Jaya Sentosa, memiliki nilai dan sikap, 
					pengetahuan, kecerdasan, ketrampilan serta kemampuan berkomunikasi, 
					dan kesadaran ekologi guna pembangunan dan pembinaan bidang hukum, 
					ekonomi dan ekologi untuk menunjang pembangunan.
				</p>				
				<a href="#" class="continue-lendo">Selengkapnya &rarr;</a>
			</div>
			<div class="conteudo">
				<div class="post-info">
					<footer>Ditulis Pada:
						<time itemprop="datePublished" datetime="2016-01-23">Rabu, 23 Januari 2016</time>.
					</footer>
				</div>
				<img src="img/alumni.png">
				<h2> Alumni Kita Yang Siap Masuk Kedunia Kerja </h2>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
					aliquip ex ea commodo consequat. Duis aute irure dolor
					in reprehenderit in voluptate velit esse cillum dolore 
					eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
					sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<a href="#" class="continue-lendo">Selengkapnya &rarr;</a>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("usid").value;
		var password = document.getElementById("psid").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>
</html>