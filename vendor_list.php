<?php include 'header.php'; ?>
<?php include 'top_sidebar.php'; ?>
<!-- Left side column. contains the logo and sidebar -->
<?php include 'left_sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Vendor List</h3>
                        <div class="box-tools">
                            <div class="pull-right">
                                <a href="vendor_add.php">
                                    <div class="btn-group-vertical">
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-plus"></i> Add
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="vendor_list" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>id</th>
                                    <th>Name(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>0001</td>
                                    <td>Mr Zet lee</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'footer.php'; ?>
