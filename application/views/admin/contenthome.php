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
                            <li class="active">
                                <i class="fa fa-file"></i> Data Admin
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <a class="btn btn-primary"  href="<?php echo base_url() ?>index.php/admin/welcome/addadmin">Add New Admin</a>
                <h2>Data Admin</h2>
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php
                      foreach ($record->result_array() as $list) { ?>
                      <tbody>
                        <tr>
                          <td><?php echo $list['username'] ?></td>
                          <td><?php echo $list['password'] ?></td>
                          <td>
                            <a href="#" class="btn btn-warning" role="button">Edit</a>
                            <a href="#" class="btn btn-danger" role="button">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php } ?>
                    </table>
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
