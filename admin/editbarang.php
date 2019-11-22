<h2 class="text-center">SELAMAT DATANG DI HALAMAN TRANSAKSI</h2>
<form action="input-aksi.php" role="form" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <?php
        if (isset($_GET['edit'])) {
            $edit = $_GET['edit'];
            $ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$edit'");
            $pecah = $ambil->fetch_array();
        }


        // if(empty($pecah)){
        //     $idBarang = "BRG001";
        // }
        // else{
        //     $pre_idBarang = $pecah['id_barang'];
        //     $num_pre_idBarang = substr($pre_idBarang,3);
        //     $input = (int)$num_pre_idBarang+1;
        //     $idBarang = str_pad($input, 6, "BRG001",STR_PAD_LEFT);
        // }
        ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Id Barang</label>
            <input type="text" name="idBarang" class="form-control" id="exampleInputEmail1" placeholder="Enter idbarang" value="<?php echo $pecah['id_barang'] ;?>">
        </div>
        <div class="form-group">
            <label>Pilih Kategori</label>
            
            <select name="kategoriBarang" class="form-control" >
                <?php $ambilCat = $koneksi->query("SELECT * FROM tbl_kategoribarang");
                while ($pecahCat = $ambilCat->fetch_array()) {
                    echo '<option>' . $pecahCat['nama_kategoriBarang'] . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nama Barang</label>
            <input type="text" name="namaBarang" class="form-control" placeholder="Nama Barang" value="<?php echo $pecah['nama_barang'] ;?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Merek Barang</label>
            <input type="text" name="merekBarang" class="form-control" placeholder="Merekbarang" value="<?php echo $pecah['merek_barang'] ;?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Harga barang</label>
            <input type="number" name="hargaBarang" class="form-control" placeholder="Harga Barang" value="<?php echo $pecah['harga_barang'] ;?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Stok Barang</label>
            <input type="number" name="stokBarang" class="form-control" placeholder="Stok Barang" value="<?php echo $pecah['stok_barang'] ;?>">
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Upload File</label>
            <input type="file" name="fotoBarang" />

        </div>
    </div>
    <!-- /.box-body -->
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'berhasil') {
            echo 'TAMBAH BARANG BERHASIL';
        } else if ($_GET['status'] == 'gagal') {
            echo 'TAMBAH BARANG GAGAL';
        } else if ($_GET['status'] == 'filesize') {
            echo 'UKURAN GAMBAR TERLALU BESAR';
        } else if ($_GET['status'] == 'ekstensi') {
            echo 'EKSTENSI TIDAK DIPERBOLEHKAN';
        }
    }
    ?>
    <div class="box-footer">
        <input type="submit" name="submit" class="btn btn-primary">
    </div>
</form>