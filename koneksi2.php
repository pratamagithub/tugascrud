<?php
$koneksi2 = mysqli_connect("localhost","root","","akademik");

if(mysqli_connect_errno()){
    echo "koneksi database gagal :" . mysqli_connect_error();
}
?>