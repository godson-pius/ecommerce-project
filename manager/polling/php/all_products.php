<?php

require_once "../../includes/functions/config.php";
blockUrlHackers('../../login', $_SESSION['adminId']);

$result = fetchAll("products", "p_id", 0, 9);

if ($result) {
    $products = $result;
}

?>

            <section id="hover-effects" class="card">
                <div class="card-body">
                    <div class="card-block my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
                        <div class="grid-hover">
                            <h5 class="text-bold-400 text-uppercase">Products</h5>
                            <div class="row">

                                <?php
                                if (!empty($products)) {
                                    foreach ($products as $product) {
                                        extract($product); ?>

                                        <div class="col-md-6 col-lg-4">
                                            <figure class="effect-winston">
                                                <!-- <img src="../img/products/<?= $p_image; ?>" width="900" alt="img06"> -->
                                                <div style="width: 100%; height: 242px; background-image: url(../img/products/<?= $p_image; ?>); background-size: cover; padding: 10px;">
                                                    <span class="h6 btn btn-white btn-sm text-warning font-weight-normal shadow">₦<?= $p_price; ?></span>
                                                </div>
                                                <figcaption>
                                                    <p>

                                                        <a href="edit_product?product=<?= $p_id; ?>"><i class="fa fa-fw fa-edit"></i></a>
                                                        <a class="text-danger" data-id="<?= $p_id; ?>" onclick="delete_product(this)"><i class="fa fa-fw fa-trash-o"></i></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                            <h5 class="text-center text-light rounded p-1" style="width: 95%; background: linear-gradient(to right, saddlebrown, firebrick);"><b><?= $p_name; ?></b></h5>
                                        </div>

                                    <?php } } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

<script src="polling/js/all_products.js"></script>
