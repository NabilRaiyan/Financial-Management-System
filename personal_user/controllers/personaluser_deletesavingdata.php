<?php

include ('../models/personaluserdb.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

$mydb = new Model();

$conObj = $mydb->OpenConn();

$delete_result = $mydb->deleteSavings($conObj, "savings", $mydata['s_id']);

if ($delete_result === TRUE) {
    echo "Savings history deleted successfully";
} else {
    echo "Savings history Deletion unsuccessful";
}
