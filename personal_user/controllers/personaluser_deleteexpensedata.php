<?php

include ('../models/personaluserdb.php');

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

$mydb = new Model();

$conObj = $mydb->OpenConn();

$delete_result = $mydb->deleteExpense($conObj, "expence", $mydata['ex_id']);

if ($delete_result === TRUE) {
    echo "Savings history deleted successfully";
} else {
    echo "Savings history Deletion unsuccessful";
}
