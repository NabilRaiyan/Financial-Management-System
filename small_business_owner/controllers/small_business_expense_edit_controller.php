<?php
include ('../models/small_business_db.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);


$mydb = new Model();

$conn = $mydb->OpenCon();

$result = $mydb->editExpense($conn, "expence", $mydata['ex_id']);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

}

echo json_encode($row);