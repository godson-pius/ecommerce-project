<?php
  require_once '../manager/includes/functions/config.php';
  blockUrlHackers('login.php', $_SESSION['userId']);

  if (isset($_SESSION['userId'])) {
      $userId = $_SESSION['userId'];
  }

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
                                <h4 class="header-title m-t-0 m-b-20">Orders</h4>
                            </div>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-12">
                                <div class="table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>

                                        <?php
                                            $userOrders = where("orders", "order_by", $_SESSION["userId"]);
                                            if (!empty($userOrders)) {
                                                foreach ($userOrders as $order) {
                                                    extract($order); 
                                                    $products = where("products", "p_id", $product); 
                                                    foreach ($products as $product){}  
                                                    if ($status == 0) {
                                                        $indicator = "Pending";
                                                        $class = "btn btn-warning btn-sm text-light rounded p-1";
                                                    } else {
                                                        $indicator = "Completed";
                                                        $class = "btn btn-success btn-sm text-light rounded p-1";
                                                    } ?>

                                                <tr>
                                                    <td><?= $order_id; ?></td>
                                                    <td><?= $product['p_name']; ?></td>
                                                    <td>₦<?= number_format($product['p_price']) ?></td>
                                                    <td>
                                                    <span class="<?= $class; ?>"><?= $indicator; ?></span>
                                                    </td>
                                                    <td><?= HUMAN_DATE($created_at); ?></td>
                                                    <td>
                                                    <button data-id="<?= $order_id; ?>" onclick="removeOrder(this)" class="btn btn-danger btn-sm rounded">Cancel Order</button>
                                                    </td>
                                                </tr>
                                        <?php } } ?>
                               
                     </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->


        <script type="text/javascript">
            $(document).ready(function() {

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
            } );

        </script>
         <script>
                        function removeOrder(e) {
                            let confirm_delete = confirm("Do you want to cancel this order?");

                        if (confirm_delete) {
                            let orderId = e.dataset.id;
                            fetch(`../manager/polling/php/delete?order_id=${orderId}`).then(d => d).then(d => d.text()).then(d => {
                                if (d === "true") {
                                    alert("Order have been removed successfully!");
                                    window.location.reload() 
                                } else if (d === "false") {
                                    alert("Failed to delete!");
                                } else {
                                    alert("Server Error!");
                                }
                            }).catch((e) => {
                                alert("Please Check your connection and try again!");
                            });
                        }
                        }
                    </script>


<?php require_once 'inc/footer.php'; ?>
