<footer class="footer">
                © 2018 Kodas Group All Rights Reserved
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url(); ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/node_modules/popper/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?php echo base_url(); ?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url(); ?>assets/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--morris JavaScript -->
        <script src="<?php echo base_url(); ?>assets/node_modules/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/node_modules/morrisjs/morris.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!--c3 JavaScript -->
        <script src="<?php echo base_url(); ?>assets/node_modules/d3/d3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/node_modules/c3-master/c3.min.js"></script>
        <!-- Popup message jquery -->
        <script src="<?php echo base_url(); ?>assets/node_modules/toast-master/js/jquery.toast.js"></script>
        <!-- Chart JS -->
        <script src="<?php echo base_url(); ?>assets/dist/js/dashboard1.js"></script>
        <script src="<?php echo base_url(); ?>assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>


        <!-- Editable -->
        <script src="<?php echo base_url(); ?>assets/node_modules/jsgrid/db.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/node_modules/jsgrid/jsgrid.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dist/js/pages/jsgrid-init.js"></script>
         <script src="<?php echo base_url(); ?>assets/dist/js/pages/validation.js"></script>


    <!-- This is data table -->
    <script src="<?php echo base_url(); ?>assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?php echo base_url(); ?>assets/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- strart edited by milan : 12-12-2018 -->
    <script src="<?php echo base_url(); ?>assets/dist/js/kodas.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/dist/js/test.js"></script> -->

    <!-- End edited by milan -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/node_modules/multiselect/js/jquery.multi-select.js"></script>

     <script src="<?php echo base_url(); ?>assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/dropify/dist/js/dropify.min.js"></script>

    


    <script>
       
         // Start by milan 2/12/19
         $(".select2").select2();
        // End by milan 2/12/19
        
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
    </script>

     <script>
        

    $(document).ready(function() {
        

        $('#myTable').DataTable();
        $(document).ready(function() {
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
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });





    </script>

    
    </body>


    <!--stickey kit -->
    

<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 11:00:07 GMT -->
</html>