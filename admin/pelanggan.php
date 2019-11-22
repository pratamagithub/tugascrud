<h2 class="text-center">SELAMAT DATANG DI HALAMAN PELANGGAN</h2>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Status</th>
            <th>Perintah</th>
        </tr>
    </thead>
    <tbody>
        <?php $ambil = $koneksi->query("SELECT * FROM tbl_user"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){?>
        <tr>
            <td><?php echo $pecah['id_user']?></td>
            <td><?php echo $pecah['nama_user']?></td>
            <td><?php echo $pecah['username_user']?></td>
            <td><?php echo $pecah['email_user']?></td>
            <td><?php echo $pecah['alamat_user']?></td>
            <td><?php echo $pecah['nohp_user']?></td>
            <td><?php echo $pecah['status_user']?></td>
            <td><?php echo $pecah['alamat_user']?></td>
            <td>
                <a href="#" class="btn btn-primary">Ubah</a>
                <a href="#" class="btn btn-primary">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>