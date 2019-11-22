<script type="text/javascript">
  jQuery(function($) {
    $('#my_image').click(function() {
      var img = $(this).attr("src");
      var appear_image = "<div id='appear_image_div' onclick='closeImage()'></div>";
      appear_image = appear_image.concat("<img id='appear_image' src='" + img + "' />");
      appear_image = appear_image.concat("<div id='close_image' onclick='closeImage()'>x</div>");
      $('body').append(appear_image);
    });
  });

  function closeImage() {
    $('#appear_image_div').remove();
    $('#appear_image').remove();
    $('#close_image').remove();
  }
</script>
<h2 class="text-center">SELAMAT DATANG DI HALAMAN BARANG</h2>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th>Kode</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Foto</th>
      <th>Perintah</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $ambil = $koneksi->query("SELECT * FROM tbl_barang"); ?>
    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $pecah['id_barang'] ?></td>
        <td><?php echo $pecah['nama_barang'] ?></td>
        <td><?php echo rupiah($pecah['harga_barang']) ?></td>
        <td><?php echo $pecah['stok_barang'] ?></td>
        <td><?php echo '<a id="my_image" href="../img/' . $pecah['foto_barang'] . '" >Foto</a>' ?></td>
        <td>
          <a href="index.php?page=editBarang&edit=<?php echo $pecah['id_barang'] ?>" class="btn btn-primary">Ubah</a>
          <a href="index.php?page=editbarang&delete=<?php echo $pecah['id_barang'] ?>" class="btn btn-primary">Hapus</a>
        </td>
      </tr>
    <?php }  ?>
    
  </tbody>
</table>