<?php
include('config/koneksi.php');
$email = $_GET['email'];
$password = $_GET['password'];
if (isset($email) && isset($password)) {
  $ambilUser =  $koneksi->query("SELECT * FROM tbl_user WHERE email_user='$email' and password_user='$password'") or die("Last error: {$koneksi->error}\n");
  $pecahUser = $ambilUser->fetch_array();
  $id_user = $pecahUser['id_user'];
  $count = mysqli_num_rows($ambilUser);
  if ($count != null) {
    $_SESSION['id_login'] = $id_user;
    $hitungCart = count($_SESSION['cart']);
    if ($hitungCart > 0) {
      foreach ($_SESSION['cart'] as $id_barang => $jumlah) {
        $ambilCart =  $koneksi->query("SELECT * FROM tbl_cart WHERE id_barang='$id_barang' AND id_user='$id_user'") or die("Last error: {$koneksi->error}\n");
        $pecahCart = $ambilCart->fetch_array();
        $countRows = mysqli_num_rows($ambilCart);
        if ($countRows > 0) {
          $koneksi->query("UPDATE tbl_cart SET jumlah_cart=jumlah_cart+$jumlah WHERE id_user='$id_user' AND id_barang='$id_barang'") or die("Last error: {$koneksi->error}\n");
        } else {
          $koneksi->query("INSERT INTO tbl_cart VALUES('','$id_user','$id_barang','$jumlah')") or die("Last error: {$koneksi->error}\n");
        }
      }
    }
    if(isset($_SESSION['return_url'])){
      $return_url = base64_decode($_SESSION["return_url"]);
      unset($_SESSION["return_url"]);
      header('Location:' . $return_url);
    }else{
      header('location: index.php');
    }
    
  }
} else {
  header('Location: logins.php');
}
