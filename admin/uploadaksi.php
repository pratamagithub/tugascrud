<?php
include 'koneksi.php';

$ekstensi_diperbolehkan = array('png','jpg');
$name_file = $_FILES['foto_barang']['name'];
$x = explode(',', $nama_file);
$ekstensi = strtolower(end($x));