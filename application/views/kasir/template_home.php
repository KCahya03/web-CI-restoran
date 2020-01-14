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
          <li class="breadcrumb-item active">Home</li>
        </ol>
    
        <div class="card mb-3">
          <div class="card-header">
          <p>Menu Makanan</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama Makanan</th>
                    <th>Harga Makanan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($list_makanan as $list_makanan): ?>
                    <tr>
                      <td>
                        <?php echo $list_makanan->nama_makanan ?>
                      </td>
                      <td width="150">
                        <?php echo $list_makanan->harga_makanan ?>
                      </td>
                      </tr>
                      <?php endforeach; ?>
                </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="card mb-3">
    <div class="card-header">
      <p>Menu Minuman</p> 
            
    </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama Minuman</th>
                    <th>Harga Minuman</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($list_minuman as $list_minuman): ?>
                    <tr>
                      <td>
                        <?php echo $list_minuman->nama_minuman ?>
                      </td>
                      <td width="150">
                        <?php echo $list_minuman->harga_minuman ?>
                      </td>
                      </tr>
                      <?php endforeach; ?>
                </tbody>
          </table>
        </div>
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
