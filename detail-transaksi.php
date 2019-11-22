<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<?php include('./component/nav.php'); ?>

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Kategori <i class="fa fa-list"></i></span>
					<ul class="category-list">
						<li><a href="#">Tenda</a></li>
						<li><a href="#">Tas</a></li>
						<li><a href="#">Jaket</a></li>
						<li><a href="#">Cooking Set</a></li>
						<li><a href="#">Sepatu</a></li>
						<li><a href="#">Cooking Set</a></li>
						<li><a href="#">Sepatu</a></li>
						<li><a href="#">Lainnya</a></li>
						<li><a href="#">Lihat Semua</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="#">Beranda</a></li>
						<li><a href="#">Barang</a></li>
						<li><a href="#">Transaksi</a></li>
						<li><a href="#">Denda</a></li>
						<li><a href="#">Ulasan</a></li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Detail Transaksi</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="order-summary clearfix">
						<div class="section-title">
							<h3 class="title">Status Pembayaran</h3>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<table class="shopping-cart-table table">
						<tbody>
<<<<<<< HEAD
							<tr>
								<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
								<td class="details">
									<a href="#">Tenda Dome</a>
									<ul>
										<li><strong>#BRG001</strong></li>
=======
						<?php 
						$query_mysql = mysqli_query($koneksi, "SELECT * FROM tbl_detailpeminjaman dp JOIN tbl_barang tb ON dp.id_barang=tb.id_barang")or die(mysql_error());
						$nomor = 1;
						while($data = mysqlI_fetch_array($query_mysql)){
						?>
							<tr>
								<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
								<td class="details">
									<a href="#"><?php echo $data['nama_barang']?></a>
									<ul>
										<li><strong><?php echo $data['id_peminjaman']?></strong></li>
>>>>>>> 86cf174c4bd973f18771af10d633ba597b836557
									</ul>
								</td>
								<td class="price text-center"><small>Jumlah : </small><strong>10</strong><br></td>
								<td class="total text-center"><strong class="primary-color">Rp 100.000</strong></td>
							</tr>
<<<<<<< HEAD
=======
							<?php } ?>
>>>>>>> 86cf174c4bd973f18771af10d633ba597b836557
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h4 class="title">No Transaksi</h4>
					</div>
					<div>
						<span class="badge badge-dark">#BRG001</span>
					</div>

					<div class="section-title">
						<h4 class="title">Status Transaksi</h4>
					</div>
					<div>
						<span class="badge badge-dark">MENUNGGU PEMBAYARAN</span>
					</div>

					<div class="section-title">
						<h4 class="title">Metode Pembayaran</h4>
					</div>
					<div>
						<span class="badge badge-dark">OVO</span>
					</div>

					<div class="section-title">
						<h4 class="title">Total Pembayaran</h4>
					</div>
					<div>
						<span class="badge badge-dark">RP 100.000</span>
					</div>

				</div>
			</div>
		</div>
	</div>
	</div>

	</div>
	<!-- /row -->
	</div>
	<!-- /container -->
	</div>
	<!-- /section -->

	<?php include('./component/footer.php'); ?>

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>