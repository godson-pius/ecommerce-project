<?php
require_once("../../admin/config/db.php");

if (isset($_SESSION['user'])) {
    if (isset($_GET['amount']) && isset($_GET['trx']) && isset($_GET['course']) && isset($_GET['user'])) {
       $trx = $_GET['trx'];
       $user_id = $_GET['user'];
       $course_id = $_GET['course'];
       $amount = $_GET['amount'];


        $sql = "INSERT INTO course_payments (txn_id, user_id, course_id, amount) VALUES ('$trx', '$user_id', '$course_id', '$amount')";

        $query = mysqli_query($link, $sql);

        if ($query) {
            echo "sent";
        } else {
            echo mysqli_error($query);
        }
    }
}

