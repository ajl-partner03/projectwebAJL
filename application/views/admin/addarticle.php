<!-- isi item -->
<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Pengelolahan
          <small>Artikel</small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url() ?>index.php/admin/welcome/articlepost">Article</a>
          </li>
          <li class="active">
            <i class="fa fa-file"></i> Add New Article
          </li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Tambah Artikel
          </div>
          <div class="panel-body">
            <?php echo validation_errors() ?>
            <?php echo form_open_multipart('admin/welcome/insert_article'); ?>
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Judul Artikel</label>
                <input name="judul_artikel" class="form-control" placeholder="Masukan Judul Artikel">
              </div>
              <div class="form-group">
                <label>Isi Artikel</label>
                <textarea class="form-control" rows="5" placeholder="Isi Artikel" name="isi_artikel"> </textarea>
              </div>
              <div class="form-group">
                <label>Gambar Artikel</label>
                <input type="file" name="article" required>
              </div>
              <button type="submit" name="btnSubmit" class="btn btn-success">Save</button>
              <button type="reset" class="btn btn-warning">Cancel</button>
              <!-- <input type="submit" value="simpan"> -->
              <?php echo form_close(); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
