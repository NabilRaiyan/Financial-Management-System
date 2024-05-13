<?php
include ('../models/small_business_db.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

$mydb = new Model();

$conn = $mydb->OpenCon();

$delete_result = $mydb->deleteSavings($conn, "savings", $mydata['s_id']);

if ($delete_result === TRUE) {
    echo "Savings history deleted successfully";
} else {
    echo "Savings history Deletion unsuccessful";
}