<?php

include('config/koneksi.php');
?>
<!-- header -->
<div id="header">
	<div class="container">
		<div class="pull-left">
			<!-- Logo -->
			<div class="header-logo">
				<a class="logo" href="/SOLO">
					<img src="./img/logo.png" alt="">
				</a>
			</div>
			<!-- /Logo -->

			<!-- Search -->
			<div class="header-search">
				<form>
					<input class="input" type="text" placeholder="Masukkan kata kunci">
					<button class="search-btn"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<!-- /Search -->
		</div>
		<div class="pull-right">
			<ul class="header-btns">
				<!-- Account -->
				<li class="header-account dropdown default-dropdown">
					<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
						<div class="header-btns-icon">
							<i class="fa fa-user-o"></i>
						</div>
						<strong class="text-uppercase">AKUN SAYA <i class="fa fa-caret-down"></i></strong>
					</div>
					<?php
					if (isset($_SESSION['id_login'])) {
						$ambilUser = $koneksi->query("SELECT * FROM tbl_user WHERE id_user='" . $_SESSION['id_login'] . "' ");
						$pecahUser = $ambilUser->fetch_array();
						$arr = explode(' ', trim($pecahUser['username_user']));
						echo 'Hai, <a href="#">' . $arr[0] . '</a>';
					} else {
						echo '<a href="login.php">Masuk</a>/<a href="daftar.php">Daftar</a>';
					}
					?>
					<ul class="custom-menu">
						<?php
						if (isset($_SESSION['id_login'])) { ?>
							<li><a href="profil.php"><i class="fa fa-user-o"></i> Akun Saya</a></li>
							<li><a href="detailTransaksi.php"><i class="fa fa-heart-o"></i> Transaksi</a></li>
							<li><a href="checkout.php"><i class="fa fa-check"></i> Checkout</a></li>
							<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
						<?php
						} else { ?>
							<li><a href="profil.php"><i class="fa fa-user-o"></i> Akun Saya</a></li>
							<li><a href="detailTransaksi.php"><i class="fa fa-heart-o"></i> Transaksi</a></li>
							<li><a href="checkout.php"><i class="fa fa-check"></i> Checkout</a></li>
							<li><a href="login.php"><i class="fa fa-unlock-alt"></i> Masuk</a></li>
							<li><a href="daftar.php"><i class="fa fa-user-plus"></i> Buat Akun</a></li>
						<?php }
						?>

					</ul>
				</li>
				<!-- /Account -->

				<!-- Cart -->
				<li class="header-cart dropdown default-dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
						<div class="header-btns-icon">
							<?php
							$totalBarang = 0;
							$totalHarga = 0;
							if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
								foreach ($_SESSION['cart'] as $id_barang => $jumlah) {
									$ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='" . $id_barang . "'") or die("Last error: {$koneksi->error}\n");
									$pecah = $ambil->fetch_array();
									$totalBarang = $totalBarang + $jumlah;
									$totalHarga = $pecah['harga_barang'] * $jumlah + $totalHarga;
								}
							}
							?>
							<i class="fa fa-shopping-cart"></i>
							<span class="qty"><?php echo $totalBarang ?></span>
						</div>
						<strong class="text-uppercase">Keranjang:</strong>
						<br>
						<span><?php echo rupiah($totalHarga) ?></span>
					</a>
					<div class="custom-menu">
						<div id="shopping-cart">
							<div class="shopping-cart-list">
								<?php
								//current URL of the Page. cart_update.php redirects back to this URL
								$current_url = base64_encode($url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

								if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
									foreach ($_SESSION['cart'] as $id_barang => $jumlah) {
										$ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='" . $id_barang . "'") or die("Last error: {$koneksi->error}\n");
										$rowcount = mysqli_num_rows($ambil);
										if ($rowcount > 0) {
											$pecah = $ambil->fetch_array();
											echo '<div class="product product-widget">';
											echo '<div class="header-btns-icon">';
											echo '<div class="product-thumb"><img src="./img/' . $pecah["foto_barang"] . '" alt="foto"><span class="qty">' . $jumlah . '</span></div>';
											echo '</div>';
											echo '<div class="product-body"><h3 class="product-price">' . rupiah($pecah["harga_barang"]) . '/Hari <span class="qty">' . $jumlah . '</span></h3><h2 class="product-name"><a href="#">' . $pecah["nama_barang"] . '</a></h2></div>';
											echo '<a href="cartUpdate.php?hapuscart=' . $pecah["id_barang"] . '&return_url=' . $current_url . '"><button class="cancel-btn"><a href="cartUpdate.php?hapuscart=' . $pecah["id_barang"] . '&return_url=' . $current_url . '"><i class="fa fa-trash"></a></i></button></a>';
											echo '</div>';
										}
									}
								} else {
									echo ' <h4>ANDA TIDAK MEMILIKI KERANJANG BARANG</h4>';
								}
								?>
								<div class="shopping-cart-btn">
									<button class="main-btn">View Cart</button>
									<a href="checkout.php"><button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button></a>
								</div>
							</div>
						</div>
				</li>
				<!-- /Cart -->

				<!-- Mobile nav toggle-->
				<li class="nav-toggle">
					<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
				</li>
				<!-- / Mobile nav toggle -->
			</ul>
		</div>
	</div>
	<!-- header -->
</div>
<!-- container -->
</header>
<!-- /HEADER -->