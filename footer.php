  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="http://saifpowertecltd.com/">Saif Powertec LTD/</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="vendor/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables -->
<script src="vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="vendor/dist/js/adminlte.min.js"></script>
<script>
  $(function () {
    $('#customer_list').DataTable();
    $('#employee_list').DataTable();
    $('#product_list').DataTable();
    $('#role_list').DataTable();
    $('#user_list').DataTable();
    $('#vendor_list').DataTable();
  })
</script>
</body>
</html>