<?php 
include('../config/koneksi.php'); //include merupan perintah untuk menyisipkanfile php ke dalam file php yang lainnya
// $id_lapak= $_POST['d_lapak_laundry'];
if(isset($_POST['submit'])){
    $ekstensi_diperbolehkan	= array('png','jpg');
    $nama_file = $_FILES['fotoBarang']['name'];
    $x = explode('.', $nama_file);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['fotoBarang']['size'];
    $file_tmp = $_FILES['fotoBarang']['tmp_name'];

    $id_barang =  $_POST ['idBarang'];
    $id_kategoriBarang = $_POST['kategoriBarang'];
    $nama_barang= $_POST['namaBarang'];
    $deskripsi_barang = $_POST['deskripsiBarang'];
    $harga_barang = $_POST['hargaBarang'];
    $stok_barang = $_POST['stokBarang'];
    // $foto = $_POST['foto'];
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 104407000){			
            move_uploaded_file($file_tmp, '../img/'.$nama_file);
            $ambil = $koneksi->query("SELECT id_kategoriBarang FROM tbl_kategoriBarang WHERE nama_kategoriBarang='$id_kategoriBarang'");
            $pecah = $ambil->fetch_array();
            $id_kategoriBarang = $pecah['id_kategoriBarang'];
            $query = $koneksi->query("INSERT INTO tbl_barang(id_barang, id_kategoriBarang, nama_barang, deskripsi_barang, harga_barang, stok_barang, foto_barang) VALUES('$id_barang','$id_kategoriBarang','$nama_barang','$deskripsi_barang','$harga_barang','$stok_barang','$nama_file' )") or die("Last error: {$koneksi->error}\n");
            // echo "INSERT INTO registrasi_laundry(username, Nama_lapak, Alamat, Kategori, No_Tlp, Email, foto, deskripsi, password)  VALUES('$username','$Nama_lapak','$Alamat','$Kategori','$No_Tlp','$email','$nama_file', '$deskripsi','$password','$nama_file')";
            if($query){
                header("location: index.php?page=tambahBarang&status=berhasil");
            }else{
                header("location: index.php?page=tambahBarang&status=gagal");
            }
        }else{
            header("location: index.php?page=tambahBarang&status=filesize");
        }
    }else{
        header("location: index.php?page=tambahBarang&status=ekstensi");
    }
}else{
    header("location: index.php?page=tambahBarang");
}

 //query mysql untuk menjalankan perintah pada mysql (untuk menampilkan data pada tabel user variabel)

//  header("location:index.php?pesan=input"); //untuk mengalihkan halaman
