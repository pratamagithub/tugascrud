<h2 class="text-center">SELAMAT DATANG DI HALAMAN DETAIL TRANSAKSI</h2>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th>Kode</th>
      <th>Nama Pelanggan</th>
      <th>Tgl Booking</th>
      <th>Durasi Peminjaman</th>
      <th>Tanggal Pinjam</th>
      <th>Status</th>
      <th>Pembayaran</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <?php $ambil = $koneksi->query("SELECT * FROM tbl_peminjaman JOIN tbl_user ON tbl_peminjaman.id_user=tbl_user.id_user WHERE id_peminjaman='" . $_GET['id'] . "'") or die("Last error: {$koneksi->error}\n"); ?>
    <?php while ($pecah = $ambil->fetch_array()) { ?>
      <tr>
        <td><?php echo $pecah['id_peminjaman'] ?></td>
        <td><?php echo $pecah['id_user'] ?></td>
        <td><?php echo $pecah['tgl_booking'] ?></td>
        <td><?php echo $pecah['durasi_peminjaman'] ?></td>
        <td><?php echo $pecah['tgl_pinjam'] ?></td>
        <td><?php echo $pecah['status_peminjaman'] ?></td>
        <td><?php echo $pecah['metode_pembayaran'] ?></td>
        <td><?php echo $pecah['total_harga'] ?></td>
      </tr>
    <?php } ?>
  </tbody>
  <thead>
    <tr>
      <th colspan="2">Kode Barang</th>
      <th colspan="2">Nama Barang</th>
      <th colspan="2">Jumlah Barang</th>
      <th colspan="2">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php $ambil = $koneksi->query("SELECT dp.id_barang,b.nama_barang,dp.jumlah_detailBarang,dp.jumlah_detailBarang*b.harga_barang AS totalbarang,SUM(dp.jumlah_detailBarang*b.harga_barang) AS total FROM tbl_detailpeminjaman AS dp JOIN tbl_barang AS b ON dp.id_barang=b.id_barang WHERE dp.id_peminjaman='" . $_GET['id'] . "'") or die("Last error: {$koneksi->error}\n"); ?>
    <?php while ($pecah = $ambil->fetch_array()) { ?>
      <tr>
        <td colspan="2"><?php echo $pecah['id_barang'] ?></td>
        <td colspan="2"><?php echo $pecah['nama_barang'] ?></td>
        <td colspan="2"><?php echo $pecah['jumlah_detailBarang'] ?></td>
        <td colspan="2"><?php echo $pecah['totalbarang'] ?></td>
      </tr>
    <?php } ?>
  </tbody>
  <tfoot>
    <?php $ambil = $koneksi->query("SELECT dp.id_barang,b.nama_barang,dp.jumlah_detailBarang,dp.jumlah_detailBarang*b.harga_barang AS totalbarang,SUM(dp.jumlah_detailBarang*b.harga_barang) AS total FROM tbl_detailpeminjaman AS dp JOIN tbl_barang AS b ON dp.id_barang=b.id_barang WHERE dp.id_peminjaman='" . $_GET['id'] . "'") or die("Last error: {$koneksi->error}\n"); ?>
    <?php $pecah = $ambil->fetch_array() ?>
    <tr>
      <td colspan="5"></td>
      <td>TOTAL</td>
      <td colspan="2"><?php echo $pecah['total'] ?></td>
    </tr>
  </tfoot>
</table>