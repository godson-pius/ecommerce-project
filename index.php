<?php
require_once 'includes/header.php'
?>

<!-- Main Slider Start -->
<div class="sticky-header-next-sec ec-main-slider section section-space-pb">
    <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
        <!-- Main slider -->
        <div class="swiper-wrapper">
            <div class="ec-slide-item swiper-slide d-flex ec-slide-1">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h1 class="ec-slide-title">New Fashion Collection</h1>
                                <h2 class="ec-slide-stitle">Sale Offer</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item swiper-slide d-flex ec-slide-2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h1 class="ec-slide-title">Boat Headphone Sets</h1>
                                <h2 class="ec-slide-stitle">Sale Offer</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!-- Main Slider End -->

<!-- Product tab Area Start -->
<section class="section ec-product-tab section-space-p" id="collection">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Our Top Collection</h2>
                    <h2 class="ec-title">Our Top Collection</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>

            <!-- Tab Start -->
            <div class="col-md-12 text-center">
                <ul class="ec-pro-tab-nav nav justify-content-center">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all">For
                            All</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men">For
                            Men</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-women">For
                            Women</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-child">For
                            Children</a></li>
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content">
                    <!-- 1st Product tab start -->
                    <div class="tab-pane fade show active" id="tab-pro-for-all">
                        <div class="row">
                            <!-- Product Content -->

                            <?php
                            if ($all_products) {
                                foreach ($all_products as $all_product) {
                                    extract($all_product); ?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                                         data-animation="fadeIn">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <div style="height: 260px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                    </a>
                                                    <span class="percentage">MD</span>
                                                    <a href="#" class="quickview" data-link-action="quickview"
                                                       title="Quick view" data-bs-toggle="modal"
                                                       data-bs-target="#ec_quickview_modal<?= $p_id; ?>"><img
                                                                src="assets/images/icons/quickview.svg"
                                                                class="svg_img pro_svg"
                                                                alt=""/></a>
                                                    <div class="ec-pro-actions">
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                           title="Compare"><img src="assets/images/icons/compare.svg"
                                                                                class="svg_img pro_svg" alt=""/></a>
                                                        <button title="Add To Cart" class="add-to-cart"><img
                                                                    src="assets/images/icons/cart.svg"
                                                                    class="svg_img pro_svg"
                                                                    alt=""/> Add To Cart
                                                        </button>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="assets/images/icons/wishlist.svg"
                                                                    class="svg_img pro_svg" alt=""/></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                            href="product-left-sidebar.html"><?= $p_name; ?></a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                <span class="new-price">₦<?= number_format($p_price); ?></span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="ec_quickview_modal<?= $p_id; ?>" tabindex="-1"
                                         role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="btn-close qty_close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                                            <!-- Swiper -->
                                                            <div class="qty-product-cover">
                                                                <div class="qty-slide">
                                                                    <div style="width: 765px; height: 250px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                                            <div class="quickview-pro-content">
                                                                <h5 class="ec-quick-title"><a
                                                                            href="product-left-sidebar.html"><?= $p_name; ?></a>
                                                                </h5>
                                                                <div class="ec-quickview-rating">
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star"></i>
                                                                </div>

                                                                <div class="ec-quickview-desc"><?= $p_desc; ?></div>
                                                                <div class="ec-quickview-price">
                                                                    <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                                    <span class="new-price">₦<?= number_format($p_price); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->

                                <?php }
                            } ?>

                            <div class="col-sm-12 shop-all-btn"><a href="shop">Shop All
                                    Collection</a></div>
                        </div>
                    </div>
                    <!-- ec 1st Product tab end -->
                    <!-- ec 2nd Product tab start -->
                    <div class="tab-pane fade" id="tab-pro-for-men">
                        <div class="row">
                            <!-- Product Content -->

                            <?php
                            if ($men_products) {
                                foreach ($men_products as $men_product) {
                                    extract($men_product); ?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                                         data-animation="fadeIn">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <div style="height: 260px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                    </a>
                                                    <span class="percentage">MD</span>
                                                    <a href="#" class="quickview" data-link-action="quickview"
                                                       title="Quick view" data-bs-toggle="modal"
                                                       data-bs-target="#ec_quickview_men<?= $p_id; ?>"><img
                                                                src="assets/images/icons/quickview.svg"
                                                                class="svg_img pro_svg"
                                                                alt=""/></a>
                                                    <div class="ec-pro-actions">
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                           title="Compare"><img src="assets/images/icons/compare.svg"
                                                                                class="svg_img pro_svg" alt=""/></a>
                                                        <button title="Add To Cart" class="add-to-cart"><img
                                                                    src="assets/images/icons/cart.svg"
                                                                    class="svg_img pro_svg"
                                                                    alt=""/> Add To Cart
                                                        </button>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="assets/images/icons/wishlist.svg"
                                                                    class="svg_img pro_svg" alt=""/></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                            href="product-left-sidebar.html"><?= $p_name; ?></a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                <span class="new-price">₦<?= number_format($p_price); ?></span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="ec_quickview_men<?= $p_id; ?>" tabindex="-1"
                                         role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="btn-close qty_close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                                            <!-- Swiper -->
                                                            <div class="qty-product-cover">
                                                                <div class="qty-slide">
                                                                    <div style="width: 765px; height: 250px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                                            <div class="quickview-pro-content">
                                                                <h5 class="ec-quick-title"><a
                                                                            href="product-left-sidebar.html"><?= $p_name; ?></a>
                                                                </h5>
                                                                <div class="ec-quickview-rating">
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star"></i>
                                                                </div>

                                                                <div class="ec-quickview-desc"><?= $p_desc; ?></div>
                                                                <div class="ec-quickview-price">
                                                                    <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                                    <span class="new-price">₦<?= number_format($p_price); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->

                                <?php }
                            } ?>


                            <div class="col-sm-12 shop-all-btn"><a href="shop">Shop All
                                    Collection</a></div>
                        </div>
                    </div>
                    <!-- ec 2nd Product tab end -->
                    <!-- ec 3rd Product tab start -->
                    <div class="tab-pane fade" id="tab-pro-for-women">
                        <div class="row">
                            <!-- Product Content -->
                            <?php
                            if ($women_products) {
                                foreach ($women_products as $women_product) {
                                    extract($women_product); ?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                                         data-animation="fadeIn">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <div style="height: 260px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                    </a>
                                                    <span class="percentage">MD</span>
                                                    <a href="#" class="quickview" data-link-action="quickview"
                                                       title="Quick view" data-bs-toggle="modal"
                                                       data-bs-target="#ec_quickview_women<?= $p_id; ?>"><img
                                                                src="assets/images/icons/quickview.svg"
                                                                class="svg_img pro_svg"
                                                                alt=""/></a>
                                                    <div class="ec-pro-actions">
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                           title="Compare"><img src="assets/images/icons/compare.svg"
                                                                                class="svg_img pro_svg" alt=""/></a>
                                                        <button title="Add To Cart" class="add-to-cart"><img
                                                                    src="assets/images/icons/cart.svg"
                                                                    class="svg_img pro_svg"
                                                                    alt=""/> Add To Cart
                                                        </button>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="assets/images/icons/wishlist.svg"
                                                                    class="svg_img pro_svg" alt=""/></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                            href="product-left-sidebar.html"><?= $p_name; ?></a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                <span class="new-price">₦<?= number_format($p_price); ?></span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="ec_quickview_women<?= $p_id; ?>" tabindex="-1"
                                         role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="btn-close qty_close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                                            <!-- Swiper -->
                                                            <div class="qty-product-cover">
                                                                <div class="qty-slide">
                                                                    <div style="width: 765px; height: 250px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                                            <div class="quickview-pro-content">
                                                                <h5 class="ec-quick-title"><a
                                                                            href="product-left-sidebar.html"><?= $p_name; ?></a>
                                                                </h5>
                                                                <div class="ec-quickview-rating">
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star"></i>
                                                                </div>

                                                                <div class="ec-quickview-desc"><?= $p_desc; ?></div>
                                                                <div class="ec-quickview-price">
                                                                    <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                                    <span class="new-price">₦<?= number_format($p_price); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->

                                <?php }
                            } ?>

                            <div class="col-sm-12 shop-all-btn"><a href="shop">Shop All
                                    Collection</a></div>
                        </div>
                    </div>
                    <!-- ec 3rd Product tab end -->
                    <!-- ec 4th Product tab start -->
                    <div class="tab-pane fade" id="tab-pro-for-child">
                        <div class="row">
                            <!-- Product Content -->
                            <?php
                            if ($children_products) {
                                foreach ($children_products as $children_product) {
                                    extract($children_product); ?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                                         data-animation="fadeIn">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <div style="height: 260px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                    </a>
                                                    <span class="percentage">MD</span>
                                                    <a href="#" class="quickview" data-link-action="quickview"
                                                       title="Quick view" data-bs-toggle="modal"
                                                       data-bs-target="#ec_quickview_children<?= $p_id; ?>"><img
                                                                src="assets/images/icons/quickview.svg"
                                                                class="svg_img pro_svg"
                                                                alt=""/></a>
                                                    <div class="ec-pro-actions">
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                           title="Compare"><img src="assets/images/icons/compare.svg"
                                                                                class="svg_img pro_svg" alt=""/></a>
                                                        <button title="Add To Cart" class="add-to-cart"><img
                                                                    src="assets/images/icons/cart.svg"
                                                                    class="svg_img pro_svg"
                                                                    alt=""/> Add To Cart
                                                        </button>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="assets/images/icons/wishlist.svg"
                                                                    class="svg_img pro_svg" alt=""/></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                            href="product-left-sidebar.html"><?= $p_name; ?></a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                <span class="new-price">₦<?= number_format($p_price); ?></span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="ec_quickview_children<?= $p_id; ?>" tabindex="-1"
                                         role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="btn-close qty_close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                                            <!-- Swiper -->
                                                            <div class="qty-product-cover">
                                                                <div class="qty-slide">
                                                                    <div style="width: 765px; height: 250px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                                            <div class="quickview-pro-content">
                                                                <h5 class="ec-quick-title"><a
                                                                            href="product-left-sidebar.html"><?= $p_name; ?></a>
                                                                </h5>
                                                                <div class="ec-quickview-rating">
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star fill"></i>
                                                                    <i class="ecicon eci-star"></i>
                                                                </div>

                                                                <div class="ec-quickview-desc"><?= $p_desc; ?></div>
                                                                <div class="ec-quickview-price">
                                                                    <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                                    <span class="new-price">₦<?= number_format($p_price); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->

                                <?php }
                            } ?>

                            <div class="col-sm-12 shop-all-btn"><a href="shop">Shop All
                                    Collection</a></div>
                        </div>
                    </div>
                    <!-- ec 4th Product tab end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ec Product tab Area End -->

<!-- ec Banner Section Start -->
<section class="ec-banner section section-space-p">
    <h2 class="d-none">Banner</h2>
    <div class="container">
        <!-- ec Banners Start -->
        <div class="ec-banner-inner">
            <!--ec Banner Start -->
            <div class="ec-banner-block ec-banner-block-2">
                <div class="row">
                    <?php
                    if ($new_arrival) {
                        foreach ($new_arrival as $new) {
                            extract($new); ?>
                            <div class="banner-block col-lg-6 col-md-12 margin-b-30" data-animation="slideInRight">
                                <div class="bnr-overlay">
                                    <div style="background-color: lightgray; width: 1740%; height: 300px; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                    <img src="assets/images/products/<?= $p_image; ?>" alt="">
                                    <div class="banner-text">
                                        <span class="ec-banner-stitle">New Arrivals</span>
                                        <span class="ec-banner-title"><?= $p_name; ?></span>
                                        <span class="ec-banner-discount">₦<?= number_format($p_price); ?></span>
                                    </div>
                                    <div class="banner-content">
                                        <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>


                    <?php
                    if ($new_trending) {
                        foreach ($new_trending as $trending) {
                            extract($trending); ?>
                            <div class="banner-block col-lg-6 col-md-12" data-animation="slideInLeft">
                                <div class="bnr-overlay">
                                    <div style=""></div>
                                    <div style="background-color: lightgray; width: 1740%; height: 300px; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                    <img src="assets/images/products/<?= $p_image; ?>" alt="">
                                    <div class="banner-text">
                                        <span class="ec-banner-stitle">New Trending</span>
                                        <span class="ec-banner-title"><?= $p_name; ?></span>
                                        <span class="ec-banner-discount">₦<?= number_format($p_price); ?></span>
                                    </div>
                                    <div class="banner-content">
                                        <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
                <!-- ec Banner End -->
            </div>
            <!-- ec Banners End -->
        </div>
    </div>
</section>
<!-- ec Banner Section End -->

<!--  Category Section Start -->
<section class="section ec-category-section section-space-p" id="categories">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Our Top Collection</h2>
                    <h2 class="ec-title">Latest Categories</h2>
                    <p class="sub-title">Browse The Collection of Top Categories</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Category Nav Start -->
            <div class="col-lg-3">
                <ul class="ec-cat-tab-nav nav">

                    <?php
                    if ($top_categories) {
                        foreach ($top_categories as $category) {
                            extract($category); ?>

                            <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-1">
                                    <div class="cat-icons"><img class="cat-icon" src="assets/images/icons/cat_1.png"
                                                                alt="cat-icon"><img class="cat-icon-hover"
                                                                                    src="assets/images/icons/cat_1_1.png"
                                                                                    alt="cat-icon"></div>
                                    <div class="cat-desc">
                                        <span><?= $cat_name; ?></span><span><?= getTotalQuote('products', 'p_cat', $cat_name); ?> Products</span>
                                    </div>
                                </a></li>

                        <?php }
                    } ?>

                </ul>

            </div>
            <!-- Category Nav End -->
            <!--Category Tab Start -->
            <div class="col-lg-9">
                <div class="tab-content">
                    <!-- 1st Category tab end -->
                    <div class="tab-pane fade show active" id="tab-cat-1">
                        <div class="row">
                            <img src="assets/images/cat-banner/1.jpg" alt=""/>
                        </div>
                        <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                    </div>
                    <!-- 1st Category tab end -->
                    <div class="tab-pane fade" id="tab-cat-2">
                        <div class="row">
                            <img src="assets/images/cat-banner/2.jpg" alt=""/>
                        </div>
                        <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                    </div>
                    <!-- 2nd Category tab end -->
                    <!-- 3rd Category tab start -->
                    <div class="tab-pane fade" id="tab-cat-3">
                        <div class="row">
                            <img src="assets/images/cat-banner/3.jpg" alt=""/>
                        </div>
                        <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                    </div>
                    <!-- 3rd Category tab end -->
                    <!-- 4th Category tab start -->
                    <div class="tab-pane fade" id="tab-cat-4">
                        <div class="row">
                            <img src="assets/images/cat-banner/4.jpg" alt=""/>
                        </div>
                        <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                    </div>
                    <!-- 4th Category tab end -->
                </div>
                <!-- Category Tab End -->
            </div>
        </div>
    </div>
</section>
<!-- Category Section End -->

<!--  services Section Start -->
<section class="section ec-services-section section-space-p" id="services">
    <h2 class="d-none">Services</h2>
    <div class="container">
        <div class="row">
            <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                <div class="ec_ser_inner">
                    <div class="ec-service-image">
                        <img src="assets/images/icons/service_1.svg" class="svg_img" alt=""/>
                    </div>
                    <div class="ec-service-desc">
                        <h2>Free Shipping</h2>
                        <p>Free shipping on all US order or order above $200</p>
                    </div>
                </div>
            </div>
            <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                <div class="ec_ser_inner">
                    <div class="ec-service-image">
                        <img src="assets/images/icons/service_2.svg" class="svg_img" alt=""/>
                    </div>
                    <div class="ec-service-desc">
                        <h2>24X7 Support</h2>
                        <p>Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
            <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                <div class="ec_ser_inner">
                    <div class="ec-service-image">
                        <img src="assets/images/icons/service_3.svg" class="svg_img" alt=""/>
                    </div>
                    <div class="ec-service-desc">
                        <h2>30 Days Return</h2>
                        <p>Simply return it within 30 days for an exchange</p>
                    </div>
                </div>
            </div>
            <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                <div class="ec_ser_inner">
                    <div class="ec-service-image">
                        <img src="assets/images/icons/service_4.svg" class="svg_img" alt=""/>
                    </div>
                    <div class="ec-service-desc">
                        <h2>Payment Secure</h2>
                        <p>Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--services Section End -->


<!-- New Product Start -->
<section class="section ec-new-product section-space-p" id="arrivals">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">New Arrivals</h2>
                    <h2 class="ec-title">New Arrivals</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- New Product Content -->

            <?php
            if ($new_arrivals) {
                foreach ($new_arrivals as $arrival) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="flipInY">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <div style="height: 260px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                    </a>
                                    <span class="flags">
                                    <span class="new">NEW</span>
                                </span>
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                       data-bs-toggle="modal" data-bs-target="#ec_quickview_arrivals<?= $p_id; ?>"><img
                                                src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt=""/></a>
                                    <div class="ec-pro-actions">
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                                    src="assets/images/icons/compare.svg" class="svg_img pro_svg"
                                                    alt=""/></a>
                                        <button title="Add To Cart" class="add-to-cart"><img
                                                    src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt=""/>
                                            Add To
                                            Cart
                                        </button>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="assets/images/icons/wishlist.svg" class="svg_img pro_svg"
                                                    alt=""/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html"><?= $p_name; ?></a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                                <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                <span class="new-price">₦<?= number_format($p_price); ?></span>
                                            </span>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="ec_quickview_arrivals<?= $p_id; ?>" tabindex="-1"
                         role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="btn-close qty_close"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                            <!-- Swiper -->
                                            <div class="qty-product-cover">
                                                <div class="qty-slide">
                                                    <div style="width: 765px; height: 250px; background-color: lightgray; background-image:url(assets/images/products/<?= $p_image; ?>); background-size: cover; background-position: center;"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                            <div class="quickview-pro-content">
                                                <h5 class="ec-quick-title"><a
                                                            href="product-left-sidebar.html"><?= $p_name; ?></a>
                                                </h5>
                                                <div class="ec-quickview-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>

                                                <div class="ec-quickview-desc"><?= $p_desc; ?></div>
                                                <div class="ec-quickview-price">
                                                    <span class="old-price">₦<?= number_format($p_price + 350); ?></span>
                                                    <span class="new-price">₦<?= number_format($p_price); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->

                <?php }
            } ?>

            <div class="col-sm-12 shop-all-btn"><a href="shop">Shop All Collection</a>
            </div>
        </div>
    </div>
</section>
<!-- New Product end -->

<!-- Ec testimonial Start -->
<?php require_once 'includes/testimonial.php' ?>
<!-- ec testimonial end -->

<!-- Ec Brand Section Start -->

<!-- Ec Brand Section End -->

<!-- Footer Start -->
<?php require_once 'includes/footer.php' ?>
<!-- Footer Area End -->

<!-- Newsletter Modal Start -->
<!--    <div id="ec-popnews-bg"></div>-->
<!--    <div id="ec-popnews-box">-->
<!--        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-6 disp-no-767">-->
<!--                <img src="assets/images/banner/newsletter.png" alt="newsletter">-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <div id="ec-popnews-box-content">-->
<!--                    <h2>Subscribe Newsletter</h2>-->
<!--                    <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>-->
<!--                    <form id="ec-popnews-form" action="#" method="post">-->
<!--                        <input type="email" name="newsemail" placeholder="Email Address" required />-->
<!--                        <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!-- Newsletter Modal end -->

<!-- Footer navigation panel for responsive display -->
<div class="ec-nav-toolbar">
    <div class="container">
        <div class="ec-nav-panel">
            <div class="ec-nav-panel-icons">
                <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon"/></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="icon"/><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="index.html" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                                                                class="svg_img header_svg" alt="icon"/></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                                                                   class="svg_img header_svg" alt="icon"/><span
                            class="ec-cart-noti">4</span></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="login.html" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                                                                class="svg_img header_svg" alt="icon"/></a>
            </div>

        </div>
    </div>
</div>
<!-- Footer navigation panel for responsive display end -->

<!-- Cart Floating Button -->
<div class="ec-cart-float">
    <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
        <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="cart"/>
        </div>
        <span class="ec-cart-count cart-count-lable">3</span>
    </a>
</div>
<!-- Cart Floating Button end -->

<!-- Whatsapp -->
<?php require_once 'includes/whatsapp.php' ?>
<!-- Whatsapp end -->

<!-- Feature tools -->
<div class="ec-tools-sidebar-overlay"></div>
<div class="ec-tools-sidebar">
    <div class="tool-title">
        <h3>Features</h3>
    </div>
    <a href="#" class="ec-tools-sidebar-toggle in-out">
        <img alt="icon" src="assets/images/common/settings.png">
    </a>
    <div class="ec-tools-detail">
        <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
            <h3>Color Scheme</h3>
            <ul class="bg-panel">
                <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                <li data-color="02"><a href="#" class="colorcode2"></a></li>
                <li data-color="03"><a href="#" class="colorcode3"></a></li>
                <li data-color="04"><a href="#" class="colorcode4"></a></li>
                <li data-color="05"><a href="#" class="colorcode5"></a></li>
            </ul>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Backgrounds</h3>
            <ul class="bg-panel">
                <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
            </ul>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Full Screen mode</h3>
            <div class="ec-fullscreen-mode">
                <div class="ec-fullscreen-switch">
                    <div class="ec-fullscreen-btn">Mode</div>
                    <div class="ec-fullscreen-on">On</div>
                    <div class="ec-fullscreen-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Dark mode</h3>
            <div class="ec-change-mode">
                <div class="ec-mode-switch">
                    <div class="ec-mode-btn">Mode</div>
                    <div class="ec-mode-on">On</div>
                    <div class="ec-mode-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>RTL mode</h3>
            <div class="ec-change-rtl">
                <div class="ec-rtl-switch">
                    <div class="ec-rtl-btn">Rtl</div>
                    <div class="ec-rtl-on">On</div>
                    <div class="ec-rtl-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Language</h3>
            <div class="ec-change-lang">
                <span id="google_translate_element"></span>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Clear local storage</h3>
            <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
        </div>
    </div>
</div>
<!-- Feature tools end -->

<!-- Vendor JS -->
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

<!--Plugins JS-->
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/countdownTimer.min.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/jquery.zoom.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/infiniteslidev2.js"></script>
<script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
<!-- Google translate Js -->
<script src="assets/js/vendor/google-translate.js"></script>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<!-- Main Js -->
<script src="assets/js/vendor/index.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>