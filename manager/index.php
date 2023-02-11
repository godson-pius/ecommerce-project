<?php
require_once 'includes/functions/config.php';
blockUrlHackers('login', $_SESSION['adminId']);

$totalProducts = getTotal('products');

$result = fetchAllDesc('products', 'p_id', 0, 5);
if ($result) {
    $products = $result;
}
?>

<?php require_once 'includes/templates/header.php'; ?>

<body data-col="2-columns" class="2-columns">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="wrapper">
    <?php require_once 'includes/templates/sidebar.php'; ?>

    <?php require_once 'includes/templates/topbar.php'; ?>

    <div class="main-panel">
      <div class="main-content">
        <div class="content-wrapper">
          <div class="container-fluid">
            <!--Statistics cards Starts-->
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="card bg-white">
                  <div class="card-body">
                    <div class="card-block pt-2 pb-0">
                      <div class="media">
                        <div class="media-body white text-left">
                          <h4 class="font-medium-5 card-title mb-0">
                            <?php if (isset($totalProducts)):
           echo $totalProducts;
       endif; ?>
                          </h4>
                          <span class="grey darken-1">Total Products</span>
                        </div>
                        <div class="media-right text-right">
                          <i class="icon-book-open font-large-1 primary"></i>
                        </div>
                      </div>
                    </div>
                    <div
                      id="Widget-line-chart"
                      class="height-150 lineChartWidget WidgetlineChart mb-2"
                    ></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="card bg-white">
                  <div class="card-body">
                    <div class="card-block pt-2 pb-0">
                      <div class="media">
                        <div class="media-body white text-left">
                          <h4 class="font-medium-5 card-title mb-0">
                            <?= getTotal('orders') ?>
                          </h4>
                          <span class="grey darken-1">Total Orders</span>
                        </div>
                        <div class="media-right text-right">
                          <i class="icon-notebook font-large-1 warning"></i>
                        </div>
                      </div>
                    </div>
                    <div
                      id="Widget-line-chart1"
                      class="height-150 lineChartWidget WidgetlineChart1 mb-2"
                    ></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="card bg-white">
                  <div class="card-body">
                    <div class="card-block pt-2 pb-0">
                      <div class="media">
                        <div class="media-body white text-left">
                          <h4 class="font-medium-5 card-title mb-0">
                            <?= getTotal('users') ?>
                          </h4>
                          <span class="grey darken-1">Total Users</span>
                        </div>
                        <div class="media-right text-right">
                          <i class="icon-users font-large-1 success"></i>
                        </div>
                      </div>
                    </div>
                    <div
                      id="Widget-line-chart2"
                      class="height-150 lineChartWidget WidgetlineChart2 mb-2"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
            <!--Statistics cards Ends-->

            <!--Line with Area Chart 1 Starts-->
            <div class="row match-height">
              <div class="col-12 col-md-12" id="recent-sales">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title-wrap bar-primary">
                      <h4 class="card-title">Recent Products</h4>
                    </div>
                    <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                  </div>
                  <div class="card-content mt-1">
                    <div class="table-responsive">
                      <table
                        class="table table-hover table-xl mb-0"
                        id="recent-orders"
                      >
                        <thead>
                          <tr>
                            <th class="border-top-0">Product Id</th>
                            <th class="border-top-0">Product Name</th>
                            <th class="border-top-0">Product Price</th>
                            <th class="border-top-0">Product Category</th>
                            <th class="border-top-0">Product Image</th>
                            <th class="border-top-0">Date Uploaded</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!--                        Recent Books Uploaded-->
                          <?php if (!empty($products)) {
                            foreach ($products as $recent_products) {
                                extract($recent_products); ?>
                          <tr class="animated fadeInUp">
                            <td class="text-truncate"><?= $p_id; ?></td>
                            <td class="text-truncate"><?= $p_name; ?></td>
                            <td class="text-truncate">₦<?= $p_price; ?></td>
                            <td class="text-truncate"><?= $p_cat; ?></td>
                            <td>
                              <img
                                src="../img/products/<?= $p_image ?>"
                                class="image-responsive rounded shadow"
                                width="60"
                                alt=""
                              />
                            </td>
                            <td>
                              <?= HUMAN_DATE($created_at); ?>
                            </td>
                          </tr>
                          <?php
                            }
                        } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Line with Area Chart 1 Ends-->

            <div class="row match-height"></div>
            <div class="row match-height">
              <div class="col-xl-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title-wrap bar-warning">
                      <h4 class="card-title">Stats</h4>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-block">
                      <div class="row my-3">
                        <div class="col">
                          <span class="mb-1 text-muted d-block"
                            ><?= getTotal(
                      'products'
                  ) ?>% - Products Available</span
                          >
                          <div class="progress" style="height: 8px">
                            <div
                              class="progress-bar gradient-blackberry"
                              role="progressbar"
                              style="width: <?= getTotal('products') ?>%"
                              aria-valuenow="70"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                          </div>
                        </div>
                        <div class="col">
                          <span class="mb-1 text-muted d-block"
                            ><?= getTotal(
                      'orders'
                  ) ?>% - Orders Available</span
                          >
                          <div class="progress" style="height: 8px">
                            <div
                              class="progress-bar gradient-pomegranate"
                              role="progressbar"
                              style="width: <?= getTotal('orders') ?>%"
                              aria-valuenow="80"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                          </div>
                        </div>
                        <div class="col">
                          <span class="mb-1 text-muted d-block"
                            ><?= getTotal(
                      'users'
                  ) ?>% - Users</span
                          >
                          <div class="progress" style="height: 8px">
                            <div
                              class="progress-bar gradient-green-tea"
                              role="progressbar"
                              style="width: <?= getTotal('users') ?>%"
                              aria-valuenow="60"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php require_once 'includes/templates/footer.php'; ?>
    </div>
  </div>
</body>
