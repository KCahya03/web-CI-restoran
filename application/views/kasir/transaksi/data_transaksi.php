<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("kasir/_partial/head.php") ?>

</head>

<body id="page-top">

  <?php $this->load->view("kasir/_partial/navbar.php") ?>

  <div id="wrapper">

  <?php $this->load->view("kasir/_partial/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          </li>
          <li class="breadcrumb-item active">Histori Transaksi</li>
        </ol>


    <div class="card mb-3">
          <div class="card-header">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama Pelanggan</th>
                    
                    <th>Makanan</th>
                    <th>Jumlah Makanan</th>
                    <th>Total Harga Makanan</th>

                    <th>Minuman</th>
                    <th>Jumlah Makanan</th>
                    <th>Total Harga Makanan</th>

                    <th>Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($order_table as $order_table): ?>
                    <tr>
                      <td>
                        <?php echo $order_table->nama_pelanggan ?>
                      </td>

                      <td>
                        <?php echo $order_table->nama_makanan ?>
                      </td>
                      <td>
                        <?php echo $order_table->jumlah_makanan ?>
                      </td>
                       <td>
                        <?php echo $order_table->total_harga_makanan ?>
                      </td>

                      <td>
                        <?php echo $order_table->nama_minuman ?>
                      </td>
                      <td>
                        <?php echo $order_table->jumlah_minuman ?>
                      </td>
                       <td>
                        <?php echo $order_table->total_harga_minuman ?>
                      </td>

                      <td>
                        <?php echo $order_table->total_harga ?>
                      </td>
                      
                      </tr>
                      <?php endforeach; ?>
                </tbody>
          </table>
        </div>
      </div>
    </div>

      <!-- Sticky Footer -->
      <?php $this->load->view("kasir/_partial/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php $this->load->view("kasir/_partial/modal.php") ?>

  <?php $this->load->view("kasir/_partial/js.php") ?>

</body>

</html>
