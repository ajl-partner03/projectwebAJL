<!-- isi item -->
<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Pengelolahan
          <small>Admin</small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url() ?>index.php/admin/welcome/">Admin</a>
          </li>
          <li class="active">
            <i class="fa fa-file"></i> Edit Admin
          </li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Update Admin
          </div>
          <div class="panel-body">
            <?php echo validation_errors() ?>
            <?php echo form_open_multipart('admin/welcome/update_admin'); ?>
            <?php foreach ($record as $list) { ?>
              <input type="hidden" name="id" placeholder="id" value="<?php echo $list->id;?>">
            <div class="form-group">
              <label>Username</label>
              <input class="form-control" name="username" value="<?php echo $list->username?>">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" name="password" value="<?php echo $list->password?>">
            </div>
            <button type="submit" name="btnSubmit" class="btn btn-primary">Update</button>
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
