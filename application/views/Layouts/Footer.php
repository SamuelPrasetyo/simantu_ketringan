</div>
</div>
<footer class="footer">
    Made by &copy;Univ. Budi Luhur JAKARTA
</footer>
</div>

<!-- Time Picker -->
<script src="<?php echo base_url() ?>template/assets/node_modules/timepicker/flatpickr.js"></script>

<!-- Magnific popup Javascript -->
<script src="<?php echo base_url() ?>template/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>

<script src="<?php echo base_url() ?>template/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url() ?>template/assets/node_modules/popper/popper.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>template/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url() ?>template/eliteadmin/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url() ?>template/eliteadmin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url() ?>template/eliteadmin/dist/js/sidebarmenu.js"></script>
<!-- Sweet-Alert  -->
<!-- <script src="<?php echo base_url() ?>template/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script> -->
<script src="<?php echo base_url() ?>template/assets/node_modules/sweetalert2/sweetalert2.min.js"></script>
<!--stickey kit -->
<script src="<?php echo base_url() ?>template/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url() ?>template/eliteadmin/dist/js/custom.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="<?php echo base_url() ?>template/assets/node_modules/raphael/raphael-min.js"></script>
<script src="<?php echo base_url() ?>template/assets/node_modules/morrisjs/morris.min.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url() ?>template/eliteadmin/dist/js/custom.min.js"></script>
<script src="<?php echo base_url() ?>template/eliteadmin/dist/js/pages/morris-data.js"></script>



<script src="<?php echo base_url() ?>template/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<script>
    function confirmDelete(url) {
        Swal.fire({
            title: 'Anda Yakin ?',
            text: "Data yang di hapus tidak bisa dikembalikan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus !',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }

    $(function() {
        $('#myTable').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        $('#config-table').DataTable({
            responsive: true
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    });
</script>
</body>

</html>