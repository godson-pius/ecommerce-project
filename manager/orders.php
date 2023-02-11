<?php
require_once "includes/functions/config.php";
blockUrlHackers('login', $_SESSION['adminId']);

$result = fetchAll("orders", "order_id");

if ($result) {
    $orders = $result;
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

            <div id="all_orders">

            </div>

        </div>
    </div>
    <script src="polling/js/all_orders.js"></script>
<?php require_once "includes/templates/footer.php"; ?>