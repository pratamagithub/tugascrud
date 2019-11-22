<?php
if (!isset($_SESSION)) {
    session_start();
}
include('config/koneksi.php');
$return_url = base64_decode($_GET["return_url"]);
$tanggalTransaksi = date("Y/m/d");
$tanggalPinjam = $_GET['tanggal_pinjam'];
$durasiPinjam = $_GET['durasi_pinjam'];
$metodePembayaran = $_GET['metode_pembayaran'];
$subTotal = $_GET['subTotal'];
$ambilCart = $koneksi->query("SELECT * FROM tbl_cart WHERE id_user='" . $_SESSION['id_login'] . "' LIMIT 1");
$pecahCart = $ambilCart->fetch_array();
$id_barang = $pecahCart['id_barang'];

$ambilPeminjaman = $koneksi->query("SELECT id_peminjaman FROM tbl_peminjaman WHERE id_user='" . $_SESSION['id_login'] . "' ORDER BY id_peminjaman DESC LIMIT 1");
$pecahPeminjaman = $ambilPeminjaman->fetch_array();
if (empty($pecahPeminjaman)) {
    $idPeminjaman = "PMJ001";
} else {
    $pre_idBarang = $pecahPeminjaman['id_peminjaman'];
    $num_pre_idBarang = substr($pre_idBarang, 3);
    $input = (int) $num_pre_idBarang + 1;
    $idPeminjaman = str_pad($input, 6, "PMJ001", STR_PAD_LEFT);
}

if (empty($return_url)) {
    header('Location: /SOLO');
}

if (!isset($tanggalPinjam) && !isset($durasiPinjam) && !isset($metodePembayaran)) {
    header('Location:' . $return_url);
} else {
    if (!isset($_SESSION['id_login'])) {
        $_SESSION['return_url'] = $return_url;
        header('Location: /SOLO/login.php');
    } else {
        $koneksi->query("INSERT INTO tbl_peminjaman VALUES('$idPeminjaman','".$_SESSION['id_login']."','$tanggalTransaksi','$durasiPinjam','$tanggalPinjam','MENUNGGU PEMBAYARAN','$metodePembayaran'");
        $koneksi->query("DELETE tbl_cart WHERE id_user='" . $_SESSION['id_login'] . "'");
<<<<<<< HEAD
    }
    header('Location: /SOLO/detail-transaksi.php');
=======
        header('Location: /SOLO/detail-transaksi.php');
    }
    
>>>>>>> 86cf174c4bd973f18771af10d633ba597b836557
}

