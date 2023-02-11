<?php
    require_once "includes/functions/config.php";
    blockUrlHackers('login', $_SESSION['adminId']);

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
                            <h4 class="card-title" id="basic-layout-form">Add Product</h4>
                        </div>
                        <p class="mb-0">Products added is strictly licensed by Morning Dew.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">

                            <form class="form" method="post" action="" enctype="multipart/form-data" id="product_form">
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="icon-Product-open"></i> Product Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Product Name</label>
                                                <input type="text" id="title" class="form-control" name="productName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="author">Product Slug</label>
                                                <input type="text" id="author" class="form-control" placeholder="mens-shoe" name="productSlug">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pages">Product Price</label>
                                                <input type="number" id="pages" class="form-control" name="productPrice">
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
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Specification</label>
                                                <select name="specification" id="specification" class="form-control">
                                                    <option value="all">All</option>
                                                    <option value="men">Male</option>
                                                    <option value="women">Female</option>
                                                    <option value="children">Children</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Product Image</label>
                                                <input type="file" class="form-control-file" id="" name="productImage" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="projectinput8">Product Description</label>
                                        <textarea id="" rows="5" class="form-control" name="productDesc"></textarea>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="reset" class="btn btn-primary mr-1">
                                        <i class="icon-reload"></i> Reset
                                    </button>
                                    <button type="submit" class="btn btn-success" name="submit" id="submit_btn">
                                        <i class="icon-noteProduct"></i> Add Product
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<script src="polling/js/add_product.js"></script>
<?php require_once "includes/templates/footer.php"; ?>