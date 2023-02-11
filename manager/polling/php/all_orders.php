<?php

require_once "../../includes/functions/config.php";
blockUrlHackers('../../login', $_SESSION['adminId']);

$result = fetchAll("orders", "book_id");

if ($result) {
    $orders = $result;
}

?>

<section id="hover-effects" class="card">
    <div class="card-body">
        <div class="card-block my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
            <div class="grid-hover">
                <h5 class="text-bold-400 text-uppercase">All Orders</h5>
                <div class="">

<div class="row match-height">
              <div class="col-12 col-md-12" id="recent-sales">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title-wrap bar-primary">
                      <h4 class="card-title">All Orders</h4>
                    </div>
                    <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                  </div>
                  <div class="card-content mt-1">
                    <div class="table-responsive">
                      <table class="table table-hover table-xl mb-0" id="recent-orders">
                        <thead>
                            <th>#</th>
                            <th>Ordered By</th>
                            <th>Product</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        <?php
                    if (!empty($orders)) {
                        foreach ($orders as $order) {
                            extract($order); 
                            $user = where("users", "user_id", $order_by);
                            foreach ($user as $orderBy){}  
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
                            <td><?= $orderBy['firstname'] . " " .  $orderBy['lastname']; ?></td>
                            <td><?= $product['p_name']; ?></td>
                            <td>
                              <span class="<?= $class; ?>"><?= $indicator; ?></span>
                            </td>
                            <td><?= HUMAN_DATE($created_at); ?></td>
                            <td>
                              <button data-id="<?= $order_id; ?>" onclick="delete_order(this)" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                      

                </div>
            </div>
        </div>
    </div>
</section>

<script src="polling/js/all_orders.js"></script>
