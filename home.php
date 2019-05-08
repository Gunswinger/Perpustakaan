<head>
	<meta charset="UTF-8">
	<title> Website Responsive</title>
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link rel="stylesheet" href="css/styles.css">
  <script src=”https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js”></script>
  </head>
  <body>
    <script>
    function read_more() {
    document.getElementById('hidden-first').style.display = 'block';
}

document.getElementById('read-more').addEventListener('click', read_more);
    </script>
	<div class="container">
	  <div class="header">
		<h1 align="center">Selamat Datang Di Pepustakaan XYZ </h1>
	  </div>
	  <div class="main">
		<div class="left">
		  <h3 align="center">Menu </h3>
		  <ul>
			<li><a href="login.html">Login</a></li>
			<li><a href="home.php">Home</a></li>
			<li><a href="daftarbuku.html">Daftar Buku</a></li>
		  </ul>
		</div>
		<div class="middle">
		  <h3 align="center">Berita</h3>
		  <p  align="center"><strong><a href="#" >Membuat
			Design Web Responsive</a></strong>
		  </p>
		  <p align="center"><img src="img/a1.jpeg" alt="gambar"></p>
<div id="hidden-first">Sed eleifend lectus id semper accumsan. Sed lobortis id ligula eget blandit. Integer interdum iaculis nunc, sed porttitor magna tincidunt in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam lobortis accumsan tempor. Aliquam sollicitudin pulvinar est, quis convallis tellus.
</div><br />
<a href="#" id="read-more">Read More >></a>
		</div>



		<div class="right">
		  <h3 align="center">Buku Terpopuler</h3>
		  <p>
		  <ul>
			<li><a href="#">Web Design</a></li>
			<li><a href="#">Pemrograman</a></li>
			<li><a href="#">Database</a></li>
		  </ul>
		  </p>
		</div>
	  </div>
	  <div class="footer">
		<p align="center">Coppright &copy; 2018 Belajar CSS
		  Responsive </a>
		</p>
	  </div>
	</div>
  </body>
  </html>
