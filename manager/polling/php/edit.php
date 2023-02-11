<?php

require_once "../../includes/functions/config.php";
blockUrlHackers('../../login', $_SESSION['adminId']);

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $result = editProduct($_POST, $product_id);

    if ($result === true) {
        echo "true";
    } else {
        $errors = $result;
        echo json_encode($errors);
    }
}

if (isset($_GET['devotion_id'])) {
    $devotion_id = $_GET['devotion_id'];

    $result = editDevotion($_POST, $devotion_id);

    if ($result === true) {
        echo "true";
    } else {
        $errors = $result;
        echo json_encode($errors);
    }
}

if (isset($_GET['freebook_id'])) {
    $freebook_id = $_GET['freebook_id'];

    $result = editFreeBook($_POST, $freebook_id);

    if ($result === true) {
        echo "true";
    } else {
        $errors = $result;
        echo json_encode($errors);
    }
}