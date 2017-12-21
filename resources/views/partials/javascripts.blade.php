<script src="{{ url('vendor/jquery') }}/jquery-1.11.3.min.js"></script>
<script src="{{ url('vendor/jquery') }}/jquery-ui.min.js"></script>
<script src="{{ url('vendor/datatables') }}/jquery.dataTables.min.js"></script>
<script src="{{ url('vendor/datatables') }}/dataTables.buttons.min.js"></script>
<script src="{{ url('vendor/datatables') }}/buttons.flash.min.js"></script>
<script src="{{ url('vendor/datatables') }}/jszip.min.js"></script>

<!-- <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script> -->
<script src="{{ url('vendor/datatables') }}/buttons.html5.min.js"></script>
<script src="{{ url('vendor/datatables') }}/buttons.print.min.js"></script>
<script src="{{ url('vendor/datatables') }}/buttons.colVis.min.js"></script>
<script src="{{ url('vendor/datatables') }}/dataTables.select.min.js"></script>
<script src="{{ url('adminlte/js') }}/bootstrap.min.js"></script>
<script src="{{ url('adminlte/js') }}/select2.full.min.js"></script>
<script src="{{ url('adminlte/js') }}/main.js"></script>

<script src="{{ url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url('adminlte/js/app.min.js') }}"></script>
<script>
    window._token = '{{ csrf_token() }}';
</script>



@yield('javascript')
