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
				<li class="active">Checkout</li>
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
				<form action="checkoutAction.php" method="get" id="checkout-form" class="clearfix">
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Barang</th>
										<th></th>
										<th class="text-center">Harga</th>
										<th class="text-center">Jumlah</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$totalBarang = 0;
									$totalHarga = 0;
									$subTotal = 0;
									if (isset($_SESSION['cart'])) {
										foreach ($_SESSION['cart'] as $id_barang => $jumlah) {
											$ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='" . $id_barang . "'") or die("Last error: {$koneksi->error}\n");
											$pecah = $ambil->fetch_array();
											$totalBarang = $totalBarang + $jumlah;
											$totalHarga = $pecah['harga_barang'] * $jumlah;
											$subTotal = $subTotal + $totalHarga;
											echo '<tr>';
											echo '<td class="thumb"><img src="./img/' . $pecah['foto_barang'] . '" alt=""></td>';
											echo '<td class="details">';
											echo 	'<a href="#">' . $pecah['nama_barang'] . '</a>';
											echo '</td>';
											echo '<td class="price text-center"><strong>' . rupiah($pecah['harga_barang']) . '</strong></td>';
											echo '<td class="qty text-center"><input class="input" type="number" value="' . $jumlah . '"></td>';
											echo '<td class="total text-center"><strong class="primary-color">' . rupiah($totalHarga) . '</strong></td>';
											echo '<td class="text-right"><a href="cartUpdate.php?hapuscart=' . $id_barang . '&return_url=' . $current_url . '"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></a></td>';
											echo '</tr>';
										}
									} else {
										echo '<h2>Tidak ada Barang</h2>';
									} ?>
								</tbody>
								<tfoot>
									<tr>
										<th>TANGGAL PINJAM</th>
										<th class="detail-checkout" colspan="2">
											<input class="input" name="tanggal_pinjam" type="date">
										</th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total"><?php echo rupiah($subTotal) ?></th>
									</tr>
									<tr>
										<th>DURASI PEMINJAMAN</th>
										<th class="detail-checkout" colspan="2">
											<input class="input" name="durasi_pinjam" type="number">
										</th>
										<th>PROMO</th>
										<td colspan="2"><?php echo rupiah(0) ?></td>
									</tr>
									<tr>
										<th>METODE PEMBAYARAN</th>
										<th class="detail-checkout" colspan="2">
											<select class="input" name="metode_pembayaran">
												<option >Pilih Metode Pembayaran</option>
												<option >OVO</option>
												<option >BNI</option>
											</select>
										</th>
										<th>TOTAL</th>
										<th colspan="2" class="total"><?php echo rupiah($subTotal) ?></th>
									</tr>
								</tfoot>
							</table>
							<input type="hidden" name="subTotal" value="<?php echo $subTotal ?>">
							<input type="hidden" name="return_url" value="<?php echo $current_url ?>">
							<div class="pull-right">
								<button class="primary-btn" name="submit">Pesan Sekarang</button>
							</div>
						</div>

					</div>
				</form>
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