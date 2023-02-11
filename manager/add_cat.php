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
                            <h4 class="card-title" id="basic-layout-form">Add Category</h4>
                        </div>
                        <p class="mb-0">These categories will be visible to all users.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">

                            <form class="form" method="post" action="" id="cat_form">
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="icon-Product-open"></i> Category Details</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="catName">Category Name</label>
                                                <input type="text" id="catName" class="form-control" name="catName">
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>

                                <div class="form-actions">
                                    <button type="reset" class="btn btn-primary mr-1">
                                        <i class="icon-reload"></i> Reset
                                    </button>
                                    <button type="submit" class="btn btn-success" name="submit" id="submit_btn">
                                        <i class="icon-noteProduct"></i> Add Category
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<script src="polling/js/add_cat.js"></script>
<?php require_once "includes/templates/footer.php"; ?>