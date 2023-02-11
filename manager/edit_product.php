<?php
    require_once "includes/functions/config.php";
    blockUrlHackers('login', $_SESSION['adminId']);

    if (isset($_GET['product'])) {
        $productId = $_GET['product'];

        $result = where("products", "p_id", "$productId");
        if ($result) {
            $product_details = $result;
        }
    }

?>


<?php require_once "includes/templates/header.php"; ?>

    <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


<?php require_once "includes/templates/sidebar.php"; ?>


<?php require_once "includes/templates/topbar.php"; ?>

    <div class="main-panel">
        <div class="main-content">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title" id="basic-layout-form">Edit Product</h4>
                        </div>
                        <p class="mb-0">Edit product here.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">

                            <?php
                                if (!empty($product_details)) {
                                    foreach ($product_details as $product_detail) {
                                        extract($product_detail); ?>
                                            <form class="form" method="post" action="" enctype="multipart/form-data" id="edit_product">
                                                <input id="productId" type="hidden" data-id="<?= $p_id; ?>">
                                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="icon-Product-open"></i> Product Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Product Name</label>
                                                <input type="text" value="<?= $p_name; ?>" id="title" class="form-control" name="productName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="author">Product Slug</label>
                                                <input type="text" value="<?= $p_slug; ?>" id="author" class="form-control" placeholder="mens-shoe" name="productSlug">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pages">Product Price</label>
                                                <input type="number" value="<?= $p_price; ?>" id="pages" class="form-control" name="productPrice">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cat">Product Category</label>
                                                <select name="productCat" id="cat" class="form-control">
                                                    <option selected disabled>Select Category</option>
                                                    
                                                    <?php 
                                                        $cats = fetchAll("categories", "cat_id");
                                                        if ($cats) {
                                                            foreach ($cats as $cat) {
                                                                extract($cat); ?>

                                                                <option value="<?= $cat_name; ?>"><?= $cat_name; ?></option>

                                                    <?php } } ?>

                                                </select>
                                                <i>Selected category is: <?= $p_cat; ?></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Select Product Image</label>
                                        <input type="file" class="form-control-file" id="" name="productImage" required>
                                        <i>Selected image is: <?= $p_image; ?></i>
                                    </div>

                                    <div class="form-group">
                                        <label for="projectinput8">Product Description</label>
                                        <textarea id="" rows="5" class="form-control" name="productDesc"><?= $p_desc; ?></textarea>
                                    </div>
                                </div>

                                                <div class="form-actions">
                                                    <button type="reset" class="btn btn-primary mr-1">
                                                        <i class="icon-reload"></i> Reset
                                                    </button>
                                                    <button type="submit" class="btn btn-success" name="submit" id="submit_btn">
                                                        <i class="icon-note"></i> Edit Product
                                                    </button>
                                                </div>
                                            </form>
                            <?php } } ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="polling/js/edit_product.js"></script>
<?php require_once "includes/templates/footer.php"; ?>