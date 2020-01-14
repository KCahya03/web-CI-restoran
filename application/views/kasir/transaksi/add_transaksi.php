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
          <li class="breadcrumb-item active">Input Orderan</li>

        </ol>

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
          </div>

          <?php endif; ?>
          <div class="card mb-3">
            <div class="card-header">
              <a href="<?php echo site_url('kasir/order') ?>"><i class="fas fa-arrow-left"></i>Back</a>
            </div>
          <div class="card-body">
            <form action="<?php base_url('kasir/order/add') ?>" method="post" enctype="multipart/formdata" >
              
              <div class="formgroup">
                <label for="nama_pelanggan">Nama Pelanggan*</label>
                <input class="form-control <?php echo form_error('nama_pelanggan') ? 'is-invalid':'' ?>" type="text" name="nama_pelanggan" placeholder="Nama Pelanggan" />
              <div class="invalid-feedback">
                <?php echo form_error('nama_pelanggan') ?>
              </div>
            </div>
            <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <div class="formgroup">
                <label for="nama_makanan">Nama Makanan*</label>
                <input class="form-control <?php echo form_error('nama_makanan') ? 'is-invalid':'' ?>" type="text" name="nama_makanan" placeholder="Nama Makanan" />
              <div class="invalid-feedback">
                <?php echo form_error('nama_makanan') ?>
              </div>
            </div>
            
            <div class="formgroup">
              <label for="jumlah_makanan">Jumlah Makanan*</label>
              <input class="form-control <?php echo form_error('jumlah_makanan') ? 'is-invalid':'' ?>" type="number" name="jumlah_makanan" min="0" placeholder="Jumlah" />
              <div class="invalid-feedback">
                <?php echo form_error('jumlah_makanan') ?>
              </div>

            <div class="formgroup">
              <label for="total_harga_makanan">Total Harga Makanan</label>
              <input class="form-control <?php echo form_error('total_harga_makanan') ? 'is-invalid':'' ?>" type="number" name="total_harga_makanan" min="0" placeholder="Harga Makanan" />
              <div class="invalid-feedback">
                <?php echo form_error('total_harga_makanan') ?>
              </div>
               <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <div class="formgroup">
                <label for="nama_minuman">Nama Minuman*</label>
                <input class="form-control <?php echo form_error('nama_minuman') ? 'is-invalid':'' ?>" type="text" name="nama_minuman" placeholder="Nama Minuman" />
              <div class="invalid-feedback">
                <?php echo form_error('nama_minuman') ?>
              </div>
            </div>
            
            <div class="formgroup">
              <label for="jumlah_minuman">Jumlah Minuman*</label>
              <input class="form-control <?php echo form_error('jumlah_minuman') ? 'is-invalid':'' ?>" type="number" name="jumlah_minuman" min="0" placeholder="Jumlah" />
              <div class="invalid-feedback">
                <?php echo form_error('jumlah_minuman') ?>
              </div>

            <div class="formgroup">
              <label for="total_harga_minuman">Total Harga Minuman</label>
              <input class="form-control <?php echo form_error('total_harga_minuman') ? 'is-invalid':'' ?>" type="number" name="total_harga_minuman" min="0" placeholder="Harga Minuman" />
              <div class="invalid-feedback">
                <?php echo form_error('total_harga_minuman') ?>
              </div>
              <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

            <div class="formgroup">
              <label for="total_harga">Total Harga</label>
              <input class="form-control <?php echo form_error('total_harga') ? 'is-invalid':'' ?>" type="number" name="total_harga" min="0" placeholder="Total Harga" />
              <div class="invalid-feedback">
                <?php echo form_error('total_harga') ?>
              </div>
            </div>
            <p></p>
            <input class="btn btn-success" type="submit" name="btn" value="Save" />
          </form>
          <p></p>
          <div class="card-footer small textmuted">*Harus Diisi</div>
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