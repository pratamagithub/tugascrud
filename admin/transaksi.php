<h2 class="text-center">SELAMAT DATANG DI HALAMAN TRANSAKSI</h2>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Pelanggan</th>
            <th>Tgl Booking</th>
            <th>Status</th>
            <th>Total</th>
            <th>Perintah</th>
        </tr>
    </thead>
    <tbody>
        <?php $ambil = $koneksi->query("SELECT * FROM tbl_peminjaman JOIN tbl_user ON tbl_peminjaman.id_user=tbl_user.id_user"); ?>
        <?php while($pecah = $ambil->fetch_array()){?>
        <tr>
            <td><?php echo $pecah['id_peminjaman']?></td>
            <td><?php echo $pecah['nama_user']?></td>
            <td><?php echo $pecah['tgl_booking']?></td>
            <td><?php echo $pecah['status_peminjaman']?></td>
            <td><?php echo rupiah($pecah['total_harga'])?></td>
            <td>
                <a href="index.php?page=detail-transaksi&id=<?php echo $pecah['id_peminjaman']?>" class="btn btn-primary">Detail</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>