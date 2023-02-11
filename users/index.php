
<?php
  require_once '../manager/includes/functions/config.php';
  blockUrlHackers('login', $_SESSION['userId']);

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
                            <div class="col-sm-12 text-center">
                                <h4 class="header-title m-t-0 m-b-20"><?= $lastname; ?> - DASHBOARD</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box widget-inline">
                                    <div class="row">

                                      <div class="col-lg-12 col-sm-12">
                                          <div class="text-center widget-inline-box">
                                              <h3 class="m-t-10"><i class="text-info mdi mdi-book"></i> <b><?= getTotal("orders", "order_by", $_SESSION['userId']); ?></b></h3>
                                              <p class="text-muted">My Orders</p>
                                          </div>
                                      </div>

                                        <!-- <div class="col-lg-6 col-sm-6">
                                            <div class="text-center widget-inline-box">
                                                <h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i> <b>7841</b></h3>
                                                <p class="text-muted">Income amounts</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h6 class="m-t-0">My Orders</h6>
                                    <div class="table-responsive">
                                        <table class="table m-0 table-hover mails table-actions-bar text-center">
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
                        </div>

                    </div> <!-- container -->

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
