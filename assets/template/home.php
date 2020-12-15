<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css style -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">



	<title>KOSYUK</title>
</head>
<body>

<!-- HEADER -->
	<header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="home.php"><img src="img/richooo.png" alt=""></a>
                </div>
<!--                 <div class="header-right">
                    <img src="img/icons/search.png" alt="" class="search-trigger"> -->
<!--                     <form action="#" id="menu_search_form" class="menu_search_form">
                       <input type="text" class="search_input" placeholder="Search Item" required="required">
                       <button class="menu_search_button"><img src="images/search.png" alt=""></button>
                    </form> -->
<!--                 </div> -->
<!--                 <div class="user-access">
                    <a href="register.php">Register /</a>
                    <a href="Login.php">Sign in</a>
                </div> -->
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Daftarmenu.php">Daftar Kos</a></li>
                        <li><a href="Aboutus.php">About</a></li>
                        <li><a href="bantuan.php">Bantuan</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><button class="btn btn-default" class="boom" id="boom"><i class="fa fa-user-circle panel-primary" aria-hidden="true"></i></button></li>

						<li>
							<!-- <button><i class="fa fa-search" aria-hidden="true"></i></button> -->
							<!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search" aria-hidden="true"></i></button>
							<div class="dropdown-menu">
								<a class="dropdoen-item">Halo</a>
							</div -->
							<!-- Large modal -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button>

							  <div class="modal fade" id="modal-default">
						          <div class="modal-dialog modal-lg">
						            <div class="modal-content">
						              <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						                  <span aria-hidden="true" style="float: right; margin-right: 30px; margin-top: 30px; ">&times;</span></button>
						                <h4 class="modal-title">Search</h4>
						              </div>
						              <div class="modal-body">
						              	<div class="form-group">
											  <div class="form-inline  mr-sm-2">
											  <input type="text" name="search" class="form-control col-md-10 mr-sm-2" placeholder="Seacrh...">
											  <button type="submit" class="btn btn-primary" style="width: 80px;"><i class="fa fa-search"></i></button>
											  </div>
										</div>
						              </div>
						            </div>
						            <!-- /.modal-content -->
						          </div>
						          <!-- /.modal-dialog -->
						        </div>
						        <!-- /.modal -->
						</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<!-- gambar besar -->
<hr class="horizontal">
<div class="slideshow-container">

	<div class="mySlides side">
		<img src="img/products/dasan agung.jpg" style="width: 100%;">
			<div class="text satu">
			<b><h2>Cari Kos di Mataram?</h2></b>
			<br><br>
			<p>Terdapat Banyak Pilihan Kos yang Tersedia Untuk Anda, Segera Cari dan Kos yang Anda Inginkan</p></div>
	</div>

	<div class="mySlides side">
		<img src="img/home 2.jpg" style="width: 100%;">
			<div class="text dua">
			<b><h2>Cari Kos Murah?</h2></b>
			<br><br>
			<p>Jangan Sampai Kelewatan Promosi Kos yang Tersedia, Ayo Buruan pesan Sekarang</p></div>
	</div>

	<div class="mySlides side">
		<img src="img/home 3.jpg" style="width: 100%;">
			<div class="text tiga">
			<b><h2>Bingung Kos Dimana?</h2>
			<br><br>
			<p>Ayo Segera Cari Wilayah Kos yang Kamu Inginkan</p></div></div>
	</div>


	<a class="prev-home" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next-home" onclick="plusSlides(1)">&#10095;</a>
</div><br>

	<div style="text-align: center; ">
		<span class="dot" onclick="currentSlides(1)"></span>
		<span class="dot" onclick="currentSlides(2)"></span>
		<span class="dot" onclick="currentSlides(3)"></span>
	</div>


<!-- Promosi kos -->
<div class="page-wrapper">

	<div class="post-slider">
		<h3 class="slider-title" style="font-family:Yu Gothic UI Semibold;">Promosi Kos</h3>
		<i class="fas fa-chevron-left prev"></i>
		<i class="fas fa-chevron-right next"></i>
		<div class="post-wrapper">
			
			<div class="post">
				<img src="img/products/promosi1.jpg" alt="" class="slider-image">
				<div class="post-info">
					<i class="fas fa-user-circle">Putri</i>
					&nbsp;
					<i class="fas fa-map-marker-alt"> Pagutan</i>
					<br>
					<a href="kospermaipagutan.php">Kos Permai Pagutan</a>
					<p>Rp 500.000/bulan</p>
					<i class="fas fa-phone"> 08xxxxx</i>
				</div>
			</div>

			<div class="post">
				<img src="img/products/promosi1.jpg" alt="" class="slider-image">
				<div class="post-info">
					<i class="fas fa-user-circle">Putra/Putri</i>
					&nbsp;
					<i class="fas fa-map-marker-alt"> Narmada</i>
					<br>
					<a href="kosjayanarmada.php">Kos Jaya Narmada</a>
					<p>Rp 750.000/bulan</p>
					<i class="fas fa-phone"> 08xxxxx</i>
				</div>
			</div>

			<div class="post">
				<img src="img/products/promosi1.jpg" alt="" class="slider-image">
				<div class="post-info">
					<i class="fas fa-user-circle">Putra/Putri</i>
					&nbsp;
					<i class="fas fa-map-marker-alt"> Perum</i>
					<br>
					<a href="kosrepublikperumindah.php">Kos Nusa Indah Perum</a>
					<p>Rp 750.000/bulan</p>
					<i class="fas fa-phone"> 08xxxxx</i>
				</div>
			</div>

			<div class="post">
				<img src="img/products/promosi1.jpg" alt="" class="slider-image">
				<div class="post-info">
					<i class="fas fa-user-circle">Putra</i>
					&nbsp;
					<i class="fas fa-map-marker-alt"> Gomong</i>
					<br>
					<a href="kosgomongmurah.php">Kos Gomong murah</a>
					<p>Rp 600.000/bulan</p>
					<i class="fas fa-phone"> 08xxxxx</i>
				</div>
			</div>

			<div class="post">
				<img src="img/products/promosi1.jpg" alt="" class="slider-image">
				<div class="post-info">
					<i class="fas fa-user-circle">Putri</i>
					&nbsp;
					<i class="fas fa-map-marker-alt"> Monjok</i>
					<br>
					<a href="kosmonjok.php">Kos Monjok </a>
					<p>Rp 700.000/bulan</p>
					<i class="fas fa-phone"> 08xxxxx</i>
				</div>
			</div>

			<div class="post">
				<img src="img/products/promosi1.jpg" alt="" class="slider-image">
				<div class="post-info">
					<i class="fas fa-user-circle">Putra</i>
					&nbsp;
					<i class="fas fa-map-marker-alt"> Kekalik</i>
					<br>
					<a href="koskekalikjaya.php">Kos Kekalik Jaya</a>
					<p>Rp 800.000/bulan</p>
					<i class="fas fa-phone"> 08xxxxx</i>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- pilihan wilayah -->
<div class="mataram-region">
	<div class="judul-wilayah">
		<h3 style="font-family:Yu Gothic UI Semibold;">Wilayah Kota Mataram </h3>
		<br>
		<div class="wilayah">

			<div class="pembagian-wilayah">
				<img src="img/products/taman-udayana.jpg" class="image">
				<div class="nama-wilayah"><a href="Daftarmenu.php#udayana">Udayana</a></div>
			</div>

			<div class="pembagian-wilayah">
				<img src="img/products/Pagutan.jpg" class="image">
				<div class="nama-wilayah"><a href="Daftarmenu.php#pagutan">Pagutan</a></div>
			</div>

			<div class="pembagian-wilayah">
				<img src="img/products/_MG_5560.JPG" class="image">
				<div class="nama-wilayah"><a href="Daftarmenu.php#perum">Perum</a></div>
			</div>

			<div class="pembagian-wilayah">
				<img src="img/products/cakranegara.jpg" class="image">
				<div class="nama-wilayah"><a href="Daftarmenu.php#cakra">Cakra</a></div>
			</div>

			<div class="pembagian-wilayah">
				<img src="img/products/dasan agung.jpg" class="image">
				<div class="nama-wilayah"><a href="Daftarmenu.php#mataram">Mataram</a></div>			
			</div>

			<div class="pembagian-wilayah">
				<img src="img/products/ampenan.jpeg" class="image">
				<div class="nama-wilayah"><a href="Daftarmenu.php#ampenan">Ampenan</a></div>
			</div>

			<div class="pembagian-wilayah">
				<img src="img/products/monjok.jpg" class="image">
				<div class="nama-wilayah"><a href="Daftarmenu.php#monjok">Monjok</a></div>
			</div>

			<div class="pembagian-wilayah">
				<img src="img/products/mataram lainnya.jpg" class="image">
				<div class="nama-wilayah"><a href="Daftarmenu.php">Lainnya...</a></div>
			</div>
		</div>
	</div>	
</div>



<!-- overlay -->
   
	<div class="popup">
   		<div class="popup-content">
   			<a class="close" id="close"><i class="fas fa-times-circle"></i></a>
			<!-- <img src="img/product/close-icon-13577.png" alt="close" class="close" id="close"> -->
    		<img src="img/yfyfyfyffy.png" alt="user" align="center">
    			<h4 class="loginregister">LOGIN</h4>
    		<br><br>
    		<a href="login.php" class="button">PENCARI KOS</a>
    		<a href="login.php" class="button">PENYEDIA KOS</a>
    	</div>
    </div>




<footer class="footer-section spad">
        <div class="container">
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Tentang Kami</h4>
                            <ul>
                                <li>Tentang Kami</li>
                                <li>Komunitas</li>
                                <li>Pekerjaan</li>
                                <li>Hubungi Kami</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Pelayanan Pelanggan</h4>
                            <ul>
                                <li>Pencarian</li>
                                <li>Kebijakan Pribadi</li>
                                <li>Pelayanan 24 Jam</li>
                                <li>Galeri</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Pelayanan Pelanggan</h4>
                            <ul>
                                <li>Gratis Akses Komunikasi</li>
                                <li>Gratis Perabot Rumah Tangga</li>
                                <li>Keuntungan Pelanggan</li>
                                <li>Syarat dan Ketentuan</li>
                                <li>Kebijakan Pribadi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Informasi KosYuk</h4>
                            <ul>
                                <li>Lapak Kos</li>
                                <li>Jumlah Kamar Tersedia</li>
                                <li>Metode Pembayaran</li>
                                <li>Durasi Pembayaran</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
            <div class="container">
                <div class="social-links">
                    <br>
                    <a href="https://bit.ly/3dDceJg" class="instagram"><i class="fa fa-instagram"></i><span>kosyuk</span></a>
                    <a href="https://bit.ly/2Wrc5Tv" class="facebook"><i class="fa fa-facebook"></i><span>kosyuk</span></a>
                    <a href="https://bit.ly/3dHeuPH" class="facebook"><i class="fa fa-phone"></i><span>+6281236555236</span></a>
                </div>
            </div>
            <div class="container text-center pt-5">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pelayanan Terbaik | KosYuk</p>
            </div>
        </div>
    </footer>

	<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	
<script type="text/javascript" src="js/home.js"></script>

</body>
</html>