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
          <li class="breadcrumb-item active">Daftar Menu</li>
          </li>
          <li class="breadcrumb-item active">List Minuman</li>
        </ol>

<div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo site_url('kasir/menu_minuman/add') ?>"><i class="fas fa-plus"></i> Tambah Data Menu Minuman</a>
            
    </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama Minuman</th>
                    <th>Harga Minuman</th>
                    <th>Action</th>
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
                      <td width="250">
                        <a href="<?php echo site_url('kasir/menu_minuman/edit/'.$list_minuman->kode_minuman) ?>" class="btn btn-small"><i class="fas fa-edit"></i>
                          Edit</a>
                          <a onclick="deleteConfirm('<?php echo site_url('kasir/menu_minuman/delete/'.$list_minuman->kode_minuman) ?>')" href="#!" class="btn btn-small text-danger"><i class="fasfa-trash"></i> Hapus</a>
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

  <script>
    function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
    }
  </script>

</body>

</html>
