<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>PSG</b>Program Sekolah Gratis
    </div>
    <strong><i class="fa fa-instagram"></i><a href="https://www.instagram.com/agusdeveloperplg/">Muhammad Agus Setiawan</a>.</strong>
  </footer>
  <!-- /.control-sidebar -->

<!-- jQuery -->
<script src="<?= base_url() ?>/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= base_url() ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/moment/moment.js"></script>
<script src="<?= base_url() ?>/public/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url() ?>/public/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url() ?>/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url() ?>/public/dist/js/adminlte.js"></script>
<script src="<?= base_url() ?>/public/rupiah.js"></script>
<script src="<?= base_url() ?>/public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/select2/js/select2.full.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    $('#reservationdate2').datetimepicker({
        format: 'L'
    });

  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>