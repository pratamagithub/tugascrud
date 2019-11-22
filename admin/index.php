<?php include('./layout/header.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container-fluid">

    <!--------------------------
        | Your Page Content Here |
        -------------------------->
    <?php
    if (isset($_GET['page'])) {
      if ($_GET['page'] == "transaksi") {
        include('transaksi.php');
      } else if ($_GET['page'] == "barang") {
        include('barang.php');
      } else if ($_GET['page'] == "tambahBarang") {
        include('tambahbarang.php');
      } else if ($_GET['page'] == "editBarang") {
        include('editbarang.php');
      } else if ($_GET['page'] == "pelanggan") {
        include('pelanggan.php');
      } else if ($_GET['page'] == "logout") {
        include('logout.php');
      } else if ($_GET['page'] == "detail-transaksi") {
        include('detail-transaksi.php');
      }
    } else {
      include('home.php');
    }
    ?>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('./layout/footer.php') ?>