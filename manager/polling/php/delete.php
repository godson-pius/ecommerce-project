<?php

require_once "../../includes/functions/config.php";
blockUrlHackers('../../login', $_SESSION['adminId']);

if (isset($_GET['product_id'])) {
    $delete_id = $_GET['product_id'];

    $result = delete("products", "p_id", $delete_id);
    if ($result === true) {
        echo "true";
    } else {
        echo "false";
    }
}

if (isset($_GET['order_id'])) {
    $delete_id = $_GET['order_id'];

    $result = delete("orders", "order_id", $delete_id);
    if ($result === true) {
        echo "true";
    } else {
        echo "false";
    }
}
