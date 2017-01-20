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
            <i class="fa fa-file"></i> Edit Article
          </li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Update Artikel
          </div>
          <div class="panel-body">
            <?php echo validation_errors() ?>
            <?php echo form_open_multipart('admin/welcome/update_article'); ?>
            <?php foreach ($record as $list) { ?>
              <input type="hidden" name="id" placeholder="id" value="<?php echo $list->id;?>">
            <div class="form-group">
              <label>Judul Artikel</label>
              <input class="form-control" name="judul_artikel" value="<?php echo $list->judul_artikel?>">
            </div>
            <div class="form-group">
              <label>Isi Artikel</label>
              <textarea class="ckeditor" placeholder="isi_artikel" name="isi_artikel" required><?php echo $list->isi_artikel; ?></textarea>
            </div>
            <div class="form-group">
              <label>Gambar Artikel</label>
              <img style="height: 400px; width: 500px" class="img-responsive" src="<?php echo base_url();?>uploads/article/<?php echo $list->gambar_artikel;?>" alt="">
            </div>
            <div class="form-group">
              <label>Gambar Artikel Baru</label>
              <input type="file" name="article">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a class="btn btn-warning"  href="<?php echo base_url() ?>index.php/admin/welcome/articlepost">Cancel</a>
            <?php }; ?>
            <?php echo form_close(); ?>
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
