<?php

include ('../models/personaluserdb.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);


$mydb = new Model();

$conObj = $mydb->OpenConn();

$result = $mydb->editSavings($conObj, "savings", $mydata['s_id']);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

}

echo json_encode($row);