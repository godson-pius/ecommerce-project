<?php
  require_once '../manager/includes/functions/config.php';
    blockUrlHackers('login.php', $_SESSION['userId']);

?>
<?php require_once 'inc/header.php'; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="header-title m-t-0 m-b-20">Messages</h4>
                </div>
            </div>


            <div class="row p-t-50">
                <h3 class="text-info col-lg-12 text-center">Morning Dew</h3>
                <p class="col-lg-12 text-center">Messages feature is being worked on!</p>
            </div>
            <!-- end row -->


        </div> <!-- container -->


        <script type="text/javascript">
            $(document).ready(function () {

                // Default Datatable
                "bDestroy": true;
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });
        </script>


        <?php require_once 'inc/footer.php'; ?>