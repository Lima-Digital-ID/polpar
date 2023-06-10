<!-- jQuery -->
<script src="{{ asset('backoffice') }}/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backoffice') }}/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backoffice') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('backoffice') }}/moment/moment.min.js"></script>
<script src="{{ asset('backoffice') }}/daterangepicker/daterangepicker.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backoffice') }}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backoffice') }}/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('backoffice') }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backoffice') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backoffice') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backoffice') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backoffice') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backoffice') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backoffice') }}/jszip/jszip.min.js"></script>
<script src="{{ asset('backoffice') }}/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backoffice') }}/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backoffice') }}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backoffice') }}/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ asset('backoffice') }}/datatables-buttons/js/buttons.print.min.js"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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

    function logout() {
        if (confirm('Apakah anda yakin akan logout?')) {
            // Save it!
            $('#logout').submit();
        } else {
            // Do nothing!
        }
    }
</script>
