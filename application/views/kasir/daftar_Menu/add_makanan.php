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
          <li class="breadcrumb-item active">Tambah Menu Makanan</li>
        </ol>

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
          </div>

          <?php endif; ?>
          <div class="card mb-3">
            <div class="card-header">
              <a href="<?php echo site_url('kasir/menu_makanan') ?>"><i class="fas fa-arrow-left"></i>Back</a>
            </div>
          <div class="card-body">
            <form action="<?php base_url('kasir/menu_makanan/add') ?>" method="post" enctype="multipart/formdata" >
            
            <div class="formgroup">
                <label for="nama_makanan">Nama Makanan*</label>
                <input class="form-control <?php echo form_error('nama_makanan') ? 'is-invalid':'' ?>" type="text" name="nama_makanan" placeholder="Nama Makanan" />
              <div class="invalid-feedback">
                <?php echo form_error('nama_makanan') ?>
              </div>
            </div>
            
            <div class="formgroup">
              <label for="harga_makanan">Harga Makanan*</label>
              <input class="form-control <?php echo form_error('harga_makanan') ? 'is-invalid':'' ?>" type="number" name="harga_makanan" min="0" placeholder="Harga" />
              <div class="invalid-feedback">
                <?php echo form_error('harga_makanan') ?>
              </div>
            </div>
            <p></p>
          <input class="btn btn-success" type="submit" name="btn" value="Save" />
          </form>
        </div>
        <div class="card-footer small textmuted">*Harus Diisi
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